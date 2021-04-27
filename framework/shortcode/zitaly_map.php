<?php
    add_shortcode( 'z_map', 'z_map' );
    function z_map( $one,$two ){ 

        $map_map      =shortcode_atts( [
            'api'      => ' ',
        ],$one );
       ob_start();    
    ?>

    <div class="wrap-col">
        <div class="wrap-map">
            <iframe
                src="<?php echo $map_map['api'];?>"
                width="100%" height="380" frameborder="0" style="border:0"></iframe>
        </div>
    </div>

<?php  
    return ob_get_clean();
}
    add_action( 'vc_before_init', 'zitaly_map' );
    function zitaly_map(){
        vc_map([
            'name'      => 'Zitaly Map Api',
            'base'      => 'z_map',
            'category'  => 'Zitaly',
            'icon'      => get_template_directory_uri().'/images/10.jpg',
            'params'    => [
                [
                    'param_name'    => 'api',
                    'heading'       => 'Google Map Location',
                    'type'          => 'textarea_html',
                ],
            ]
        ]);
    }