<?php
    add_shortcode( 'zitaly_res_info', 'zitaly_res_info' );
    function zitaly_res_info(  $one,$two ){
        $res_info = shortcode_atts( [
            'name'      => '',
        ],$one );
        ob_start(); 
    ?>
        <div class="wrap-col">
            <div class="contact">
                <div id="contact_form">
                    <form name="contact" id="contact" method="post" action="reservation.php">
                        <label class="row">
                            <div class="col-1-2">
                                <div class="wrap-col">
                                    <input type="text" name="name" id="name" placeholder="Enter name" required="required">
                                </div>
                            </div>
                            <div class="col-1-2">
                                <div class="wrap-col">
                                    <input type="email" name="email" id="email" placeholder="Enter email" required="required">
                                </div>
                            </div>
                        </label>
                        <label class="row">
                            <div class="col-2-4">
                                <div class="wrap-col">
                                <input type="text" name="subject" id="subject" placeholder="Subject" required="required">
                                </div>
                            </div>
                            <div class="col-1-4">
                                <div class="wrap-col">
                                <input type="date" name="date" id="date" placeholder="Date">
                                </div>
                            </div>
                            <div class="col-1-4">
                                <div class="wrap-col">
                                <input type="time" name="time" id="time" placeholder="Time">
                                </div>
                            </div>											
                        </label>
                        <label class="row">
                            <div class="wrap-col">
                                <textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required" placeholder="Message"></textarea>
                            </div>
                        </label>
                        <center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
                    </form>
                </div>
            </div>
        </div>

    <?php
        return ob_get_clean();    
    }

    add_action( 'vc_before_init','reservation_info' );
    function reservation_info(){
        vc_map([
            'name'      =>  'Reservation Form',
            'base'      =>  'zitaly_res_info',
            'category'  => 'Zitaly',
            'icon'      => get_template_directory_uri().'/images/10.jpg',
        ]);
    }