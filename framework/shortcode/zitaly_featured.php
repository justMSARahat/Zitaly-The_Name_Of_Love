<?php
    add_shortcode( 'zitaly_featured', 'zitaly_featured' );
    function zitaly_featured( $one,$two ){ 

        $featured      =shortcode_atts( [
            'title'      => ' ',
            'desc'      => ' ',

        ],$one );
       ob_start();    
    ?>

    <section class="content-box box-2">
        <div class="zerogrid">
            <div class="row wrap-box">
                <!--Start Box-->

                <div class="header">
                    <h2><?php echo $featured['title'];?></h2>
                    <hr class="line">
                    <span><?php echo $featured['desc'];?></span>
                </div>

                <div class="row">

                    <?php 
                        $post       = new WP_Query([
                             'post_type'        => 'featured',
                             'posts_per_page'   => 6,
                        ]);
                        while($post->have_posts() ): $post->the_post(); 
                    ?>
                    
                    <div class="col-1-3">
                        <div class="wrap-col">
                            <div class="box-item">
                                <span class="ribbon"><?php the_title() ; ?><b></b></span>
                                <?php $image_linnk =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                                <img src="<?php echo $image_linnk ?>" alt="">
                                
									<p><?php echo wp_trim_words(get_the_content(),5,'Read More' ); ?></p>

                                <a href="<?php the_permalink(); ?>" class="button button-1">Detail</a>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>

                </div>
            </div>
        </div>
    </section>

<?php  
    return ob_get_clean();
}
    add_action( 'vc_before_init', 'vc_zitaly_featured' );
    function vc_zitaly_featured(){
        vc_map([
            'name'      => 'Zitaly Featured',
            'base'      => 'zitaly_featured',
            'category'  => 'Zitaly',
            'icon'      => get_template_directory_uri().'/images/10.jpg',
            'params'    => [
                [
                    'param_name'    => 'title',
                    'heading'       => 'Title',
                    'type'          => 'textfield',
                ],
                [
                    'param_name'    => 'desc',
                    'heading'       => 'Description',
                    'type'          => 'textfield',
                ],
            ],
        ]);
    }