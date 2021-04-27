<?php
    add_shortcode( 'food_menu_scode','food_menu_scode' );
    function food_menu_scode( $one,$two ){ 

        $food_menu = shortcode_atts( [
            'name'      => ' ',
            'food_slug'      => ' ',
        ],$one );
    
        ob_start();
    ?>
    <div class="wrap-col">
        <h3><?php echo $food_menu['name']; ?></h3>
        <?php 
        $food_menu      = new WP_Query([
            'post_type'     => 'menu',
            'posts_per_page'=> 3,
            'tax_query'     =>[
                [
                    'taxonomy'      => 'food_category',
                    'terms'         => $food_menu['food_slug'],
                    'field'         => 'slug',
                ],
            ],



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
        $cat            = get_terms('food_category');
        
        $foot_slug['-Select-'] = '';
        foreach($cat as $cat_slug){
            $foot_slug[$cat_slug -> name] = $cat_slug -> slug;
        }
        
        $foot_cat['-Select-'] = ' ';
        foreach($cat as $cat){
            $foot_cat[$cat->name] = $cat->name;
        }
        
        vc_map([
            'name'      =>    'Menu Items',
            'base'      =>    'food_menu_scode',
            'category'  =>    'Zitaly',
            'icon'      =>    get_template_directory_uri().'/images/10.jpg',
            'params'    =>    [
                [
                    'param_name'    => 'name',
                    'heading'       => 'Select Category',
                    'type'          => 'dropdown',
                    'value'         => $foot_cat,
                ],
                [
                    'param_name'    => 'food_slug',
                    'heading'       => 'Select Food Category',
                    'type'          => 'dropdown',
                    'value'         => $foot_slug,
                ],
            ],
        ]);
    }




