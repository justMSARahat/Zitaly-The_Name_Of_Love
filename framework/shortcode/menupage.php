<?php
    add_shortcode( 'food_menu_scode','food_menu_scode' );
    function food_menu_scode( $one,$two ){ 
    
        ob_start();

    ?>

            <div class="wrap-col">
                <h3>Pasta Plates</h3>

                <?php 

                $food_menu      = new WP_Query([
                    'post_type'     => 'menu',
                    'posts_per_page'=> 3,
                ]);
                while($food_menu->have_posts()): $food_menu->the_post(); ?>
                <div class="post">
                    <a href="#"><img src="<?php echo get_post_meta(get_the_ID(),'image',true ); ?>"/></a>
                    <div class="wrapper">
                        <h5><a href="#"><?php echo the_title(); ?></a></h5>
                        <span>$<?php echo get_post_meta(get_the_ID(),'mp',true); ?> - $<?php echo get_post_meta(get_the_ID(),'mx',true); ?></span>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>


<?php 

return ob_get_clean(); 
}
    
    add_action('vc_before_init','vc_for_menu');
    function vc_for_menu(){
        vc_map([
            'name'      =>    'Menu Items',
            'base'      =>    'food_menu_scode',
            'category'  =>    'Zitaly',
            'icon'      =>    get_template_directory_uri().'/images/10.jpg',
        ]);
    }




