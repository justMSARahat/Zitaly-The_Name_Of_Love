<?php
class about_us_zitaly extends WP_Widget{
    public function __construct(){
        parent::__construct('about_us_zitaly','zItaly About Us',[
            'description'   => 'ZItaly About Us Widget'
        ]);
    }
    public function widget($one,$two){ 
        
        $title           = $two['title'];  
        $description     = $two['description'];  
        $image           = $two['image'];  

    ?>
        <div class="widget wid-about">
            <div class="wid-header">
                <h5><?php echo $title; ?></h5>
            </div>
            <div class="wid-content">
                <img src="<?php echo $image ; ?>"  />
                <p><?php echo $description; ?></p>
            </div>
        </div>
    <?php }
    public function form($two){ 
        $title           = $two['title'];  
        $description     = $two['description'];  
        $image           = $two['image'];  
    ?>
    
        <p>
            <label for="">Title</label>
            <input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" type="text">
        </p>
        <p>
            <label for="">Description</label>
            <textarea cols="30" rows="3" class="widefat" name="<?php echo $this->get_field_name('description'); ?>" ><?php echo $description; ?></textarea>
        </p>
        <p>
            <label for="">Image</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('image'); ?>" value="<?php echo $image ; ?>">
        </p>
    <?php } 
}