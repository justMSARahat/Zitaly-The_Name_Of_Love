<?php
    add_shortcode( 'z_gallery', 'z_gallery' );
    function z_gallery( $one,$two ){ 

        // $gallery_z      =shortcode_atts( [
        //     'name'      => ' ',
        // ],$one );
       ob_start();    
    ?>

    <div class="row">
        
        <?php
            $gallery = new WP_Query([
                'post_type'     => 'gallery',
                'posts_per_page'=> '12',      
            ]);
            while($gallery->have_posts()) : $gallery->the_post(); 
        ?> 
        <div class="col-1-4">
            <div class="zoom-container">
                <a href="#">
                    <span class="zoom-caption">
                        <span> <?php the_title(); ?></span>
                    </span>
                    <?php the_post_thumbnail(); ?>
                </a>
            </div>
        </div>
        <?php endwhile; ?>

    </div>

<?php  
    return ob_get_clean();
}
    add_action( 'vc_before_init', 'zitaly_gellery' );
    function zitaly_gellery(){
        vc_map([
            'name'      => 'Zitaly Gallery',
            'base'      => 'z_gallery',
            'category'  => 'Zitaly',
            'icon'      => get_template_directory_uri().'/images/10.jpg',
            
        ]);
    }