<?php
    add_shortcode( 'zitaly_res_form', 'zitaly_res_form' );
    function zitaly_res_form(  $one,$two ){
        $res_form = shortcode_atts( [
            'head'      => 'Complete the Submission Form',
            'desc'      => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard',
            'phone1'      => '+6221 888 888 90',
            'phone2'      => '+6221 888 88891',
            'email'      => 'info@yourdomain.com',
        ],$one );
        ob_start(); 
    ?>

    <div class="wrap-col">
        <h3><?php echo $res_form['head'];?></h3>
        <p><?php echo $res_form['desc'];?></p><br>
        <h3>Or Just Make a Call</h3>
        <p><?php echo $res_form['phone1'];?> <br>
            <?php echo $res_form['phone2'];?></p>
        <p><?php echo $res_form['email'];?></p>
    </div>    


    <?php
        return ob_get_clean();    
    }

    add_action( 'vc_before_init','reservation_form' );
    function reservation_form(){
        vc_map([
            'name'      =>  'Reservation Info',
            'base'      =>  'zitaly_res_form',
            'category'  => 'Zitaly',
            'icon'      => get_template_directory_uri().'/images/10.jpg',
            'params'    => [
                [
                    'param_name'        => 'head',
                    'heading'           => 'Heading Text',
                    'type'           => 'textfield',
                ],
                [
                    'param_name'        => 'desc',
                    'heading'           => 'Description',
                    'type'           => 'textarea',
                ],
                [
                    'param_name'        => 'phone1',
                    'heading'           => 'Primary Phone Number',
                    'type'           => 'textfield',
                ],
                [
                    'param_name'        => 'phone2',
                    'heading'           => 'Secondary Phone Number',
                    'type'           => 'textfield',
                ],
                [
                    'param_name'        => 'email',
                    'heading'           => 'Email Address',
                    'type'           => 'textfield',
                ],
            ]
        ]);
    }