<?php get_header(); ?>
<section id="container" class="sub-page">
    <div class="wrap-container zerogrid">

    <?php 
        if(!is_front_page() ){ ?>
            <div class="crumbs">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <?php while(have_posts()): the_post() ?>

                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>

                    <?php endwhile; ?>
                </ul>
            </div>
    <?php  } 
        else{ ?>
            <section class="content-box box-1">
                <div class="zerogrid">
                    <div class="row box-item"><!--Start Box-->
                        <h2>“Your awesome company slogan goes here, we have the best food around”</h2>
                        <span>Unc elementum lacus in gravida pellentesque urna dolor eleifend felis eleifend</span>
                    </div>
                </div>
            </section>
    <?php }
    ?>


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
            <?php get_sidebar()?>
        </div>
        <?php } ?>
    </div>
</section>
<?php get_footer();?>