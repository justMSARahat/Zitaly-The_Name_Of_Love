<?php
    add_shortcode( 'news_scode','news_scode' );
    function news_scode( $one,$two ){ 

        $news_menu = shortcode_atts( [
            'name'      => ' ',
        ],$one );
    
        ob_start();
    ?>

        <?php
            $news       = new WP_Query([
                'post_type'     => 'zitaly_news',
                'posts_per_page' => 1,
            ]);
            while( $news->have_posts() ): $news->the_post(); 
        ?>
        
        
        
        <article>
            <div class="art-header">
                <div class="entry-title">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="info">By <a href="#"><?php the_author();?></a> on <?php the_date();?></div>
            </div>
            <div class="art-content">
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
            </div>
        </article>

        <?php endwhile; ?>


        <div class="widget wid-related">
            <div class="wrap-col">
                <div class="wid-header">
                    <h5>Related Post</h5>
                </div>
                <div class="wid-content">
                    <div class="row">


                    <?php
                        $news_b       = new WP_Query([
                            'post_type'     => 'zitaly_news',
                            'posts_per_page' => 3,
                            'offset'		=> 1,
                        ]);
                        while( $news_b->have_posts() ): $news_b->the_post(); 
                    ?>

                       <div class="col-1-3">
                            <div class="wrap-col">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
                            </div>
                        </div>

                    <?php endwhile; ?>

                    </div>
                </div>
            </div>
        </div>


<?php   
    return ob_get_clean(); 
    }
    
    add_action('vc_before_init','vc_for_news');

    
    function vc_for_news(){
        
        vc_map([
            'name'      =>    'Zitaly News',
            'base'      =>    'news_scode',
            'category'  =>    'Zitaly',
            'icon'      =>    get_template_directory_uri().'/images/10.jpg',
            

        ]);
    }