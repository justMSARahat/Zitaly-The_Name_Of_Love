<?php
class shedule_zitaly extends WP_Widget{
    public function __construct(){
        parent::__construct('shedule_zitaly','zItaly Schedule Footer',[
            'description'   => 'ZItaly About Us Widget'
        ]);
    }
    public function widget($one,$two){ 
        $title          = $two['title'];  
        $a              = $two['a'];  
        $b              = $two['b'];  
        $c              = $two['c'];  
        $d              = $two['d'];   

    ?>


    <div class="col-1-3">
        <div class="wrap-col">
            <h4><?php echo $title;?></h4>
            <p><span>Mon :</span> <?php echo $a?></p>
            <p><span>Tue-Wed :</span> <?php echo $b?></p>
            <p><span>Thu-Sat :</span> <?php echo $c?></p>
            <p><span>Sun :</span> <?php echo $d?></p>
            <p><span>Need help getting home?</span></br>
            We will call a cab for you!</p>
        </div>
    </div>

        
    <?php }
    public function form($two){ 
        $title          = $two['title'];  
        $a              = $two['a'];  
        $b              = $two['b'];  
        $c              = $two['c'];  
        $d              = $two['d'];  
    ?>
    
        <p>
            <label for="">Title</label>
            <input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" type="text">
        </p>
        <p>
            <label for="">Monday Schedule </label>
            <input class="widefat" name="<?php echo $this->get_field_name('a'); ?>" value="<?php echo $a; ?>" type="text">
        </p>
        <p>
            <label for="">Tue-Wed Schedule </label>
            <input class="widefat" name="<?php echo $this->get_field_name('b'); ?>" value="<?php echo $b; ?>" type="text">
        </p>
        <p>
            <label for="">Thu-Sat Schedule </label>
            <input class="widefat" name="<?php echo $this->get_field_name('c'); ?>" value="<?php echo $c; ?>" type="text">
        </p>
        <p>
            <label for="">Sunday Schedule </label>
            <input class="widefat" name="<?php echo $this->get_field_name('d'); ?>" value="<?php echo $d; ?>" type="text">
        </p>
    <?php } 
}