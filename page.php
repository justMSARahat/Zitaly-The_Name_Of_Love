<?php get_header(); ?>
<section id="container" class="sub-page">
    <div class="wrap-container zerogrid">
        <div class="crumbs">
            <ul>
                <li><a href="index.html">Home</a></li>
                <?php 
                    if(!is_front_page() ){
                        while(have_posts()): the_post() ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile;
                    } ?>
            </ul>
        </div>

        <?php 
            if( get_post_meta(get_the_ID(),'sp',true) == 'left' ){ ?>
                <div id="sidebar" class="col-1-3">
                    <?php dynamic_sidebar('page_sidebar');?>
                </div>
                <div id="main-content" class="col-2-3">
                    <div class="wrap-content">
                        <?php while(have_posts()): the_post();
                            the_content(  );
                            endwhile; ?>
                    </div>
                </div>
        <?php }
            elseif( get_post_meta(get_the_ID(),'sp',true) == 'full' ){ ?>
                <div id="main-content" class="col-3-3">
                    <div class="wrap-content">
                        <?php while(have_posts()): the_post();
                            the_content(  );
                            endwhile; ?>
                    </div>
                </div>
        <?php }
            elseif( get_post_meta(get_the_ID(),'sp',true) == 'right' ){ ?>
                <div id="main-content" class="col-2-3">
                    <div class="wrap-content">
                        <?php while(have_posts()): the_post();
                            the_content(  );
                            endwhile; ?>
                    </div>
                </div>
                <div id="sidebar" class="col-1-3">
                    <?php dynamic_sidebar('page_sidebar');?>
                </div>
        <?php } ?>
    </div>
</section>
<?php get_footer();?>