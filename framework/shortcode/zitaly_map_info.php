<?php
    add_shortcode( 'z_map_info', 'z_map_info' );
    function z_map_info( $one,$two ){ 

        $map_info      =shortcode_atts( [
            'address'    => ' ',
            'schedule_a' => ' ',
            'schedule_b' => ' ',
            'email'      => ' ',
            'phone'      => ' ',
            'fax'        => ' ',
        ],$one );
       ob_start();    
    ?>

    <div class="wrap-col">
        <h3>Address</h3>
        <p><?php echo $map_info['address'];?></p><br />
        <h3>Hours Of Operation</h3>
        <p><span>MONDAY-FRIDAY: </span><?php echo $map_info['schedule_a'];?></p>
        <p><span>SATURDAY-SUNDAY: </span><?php echo $map_info['schedule_b'];?></p><br />
        <h3>Contact Info</h3>
        <p><span>EMAIL ADDRESS: </span><?php echo $map_info['email'];?></p>
        <p><span>TELEPHONE: </span><?php echo $map_info['phone'];?></p>
        <p><span>FAX: </span><?php echo $map_info['fax'];?></p>
    </div>

<?php  
    return ob_get_clean();
}
    add_action( 'vc_before_init', 'zitaly_map_info' );
    function zitaly_map_info(){
        vc_map([
            'name'      => 'Zitaly Map Info',
            'base'      => 'z_map_info',
            'category'  => 'Zitaly',
            'icon'      => get_template_directory_uri().'/images/10.jpg',
            'params'    => [
                [
                    'param_name'    => 'address',
                    'heading'       => 'Address',
                    'type'          => 'textfield',
                ],
                [
                    'param_name'    => 'schedule_a',
                    'heading'       => 'MONDAY-FRIDAY:',
                    'type'          => 'textfield',
                ],
                [
                    'param_name'    => 'schedule_b',
                    'heading'       => 'SATURDAY-SUNDAY:',
                    'type'          => 'textfield',
                ],
                [
                    'param_name'    => 'email',
                    'heading'       => 'Email Address',
                    'type'          => 'textfield',
                ],
                [
                    'param_name'    => 'phone',
                    'heading'       => 'Phone Number',
                    'type'          => 'textfield',
                ],
                [
                    'param_name'    => 'fax',
                    'heading'       => 'Fax Address',
                    'type'          => 'textfield',
                ],
            ],
        ]);
    }