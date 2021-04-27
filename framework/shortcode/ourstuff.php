<?php
    add_shortcode( 'our_stuff','our_stuff' );
    function our_stuff( $one,$two ){ 
            $stuff_info = shortcode_atts( [
                'name'      => ' ',
                'profile'   => ' ',
                'twitter'   => 'https://twitter.com',
                'facebook'  => 'https://facebook.com',
                'linkedin'  => 'https://linkedin.com',
                'instagram' => 'https://instagram.com',
            ],$one );
        ob_start();
    ?>

            <div class="chef">
                <div class="wrap-col">
                    <div class="zoom-container">
                        <a href="#">
                            <img src="<?php echo wp_get_attachment_url( $stuff_info['profile'] )?>">
                        </a>
                    </div>
                    <h3><?php echo $stuff_info['name']; ?></h3>
                    <ul class="social t-center">
                        <li><a href="<?php echo $stuff_info['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?php echo $stuff_info['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php echo $stuff_info['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="<?php echo $stuff_info['instagram']; ?>"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

<?php 

return ob_get_clean(); 
}
    
    add_action('vc_before_init','vc_our_stuff1');

    
    function vc_our_stuff1(){
                vc_map([
                    'name'      => 'Our Stuff',
                    'base'      => 'our_stuff',
                    'category'  => 'Zitaly',
                    'icon'      => get_template_directory_uri().'/images/10.jpg',
                    'params'    => [
                        [
                            'param_name'      => 'name',
                            'heading'         => 'Stuff Name',
                            'type'            => 'textfield',
                        ],
                        [
                            'param_name'      => 'profile',
                            'heading'         => 'Stuff Picture',
                            'type'            => 'attach_image',
                        ],
                        [
                            'param_name'      => 'twitter',
                            'heading'         => 'Twitter',
                            'type'            => 'textfield',
                        ],
                        [
                            'param_name'      => 'facebook',
                            'heading'         => 'Facebook',
                            'type'            => 'textfield',
                        ],
                        [
                            'param_name'      => 'linkedin',
                            'heading'         => 'Linkedin',
                            'type'            => 'textfield',
                        ],
                        [
                            'param_name'      => 'instagram',
                            'heading'         => 'Instagram',
                            'type'            => 'textfield',
                        ],
                    ],
    
            ]);
        }


