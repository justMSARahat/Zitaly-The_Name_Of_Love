<?php
class map_zitaly extends WP_Widget{
    public function __construct(){
        parent::__construct('map_zitaly','zItalyMap',[
            'description'   => 'ZItaly Map Widget'
        ]);
    }
    public function widget($one,$two){ 
        
        $title    = $two['title'];  
        $link     = $two['link'];  

    ?>


       
        <div class="col-1-3">
            <div class="wrap-col">
            <h4><?php echo $title;?></h4>
                <div class="wrap-map"><iframe src="<?php echo $link; ?>" width="100%" height="200" frameborder="0" style="border:0"></iframe></div>
            </div>
        </div>



    <?php }
    public function form($two){ 
        
        $title    = $two['title'];  
        $link     = $two['link'];  
    ?>
    
        <p>
            <label for="">Title</label>
            <input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" type="text">
        </p>
        <p>
            <label for="">Google Map Api</label>
            <input class="widefat" name="<?php echo $this->get_field_name('link'); ?>" value="<?php echo $link; ?>" type="text">
        </p>
    <?php } 
}