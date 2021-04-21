<?php
class about_zitaly extends WP_Widget{
    public function __construct(){
        parent::__construct('about_zitaly','zItaly About Us Footer',[
            'description'   => 'ZItaly About Us Widget'
        ]);
    }
    public function widget($one,$two){ 
        
        $title           = $two['title'];  
        $name           = $two['name'];  
        $description     = $two['description'];  
        $image           = $two['image'];  

    ?>


    <div class="col-1-3">
        <div class="wrap-col">
            <h4><?php echo $title;?></h4>
            <div class="row">
                <img src="<?php echo $image ; ?> ">
                <h5><?php echo $name; ?></h5>
                <p><?php echo $description;?></p>
            </div>
        </div>
    </div>

        
    <?php }
    public function form($two){ 
        $title           = $two['title'];  
        $name           = $two['name'];  
        $description     = $two['description'];  
        $image           = $two['image'];  
    ?>
    
        <p>
            <label for="">Title</label>
            <input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" type="text">
        </p>
        <p>
            <label for="">Name</label>
            <input class="widefat" name="<?php echo $this->get_field_name('name'); ?>" value="<?php echo $name; ?>" type="text">
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