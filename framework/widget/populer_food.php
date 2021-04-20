<?php

class populer_food_zitaly extends WP_Widget{
    public function __construct(){
        parent::__construct('populer_food_zitaly','Zilaty Latest Food Menu',[
            'description'       => 'Total Latest Food will be appear here',
        ]);
    }
    public function widget($one , $two){ 
        $title      = $two['title']; 
    ?>
        <div class="widget wid-post">
            <div class="wid-header">
                <h5><?php echo $title; ?></h5>
            </div>
            <div class="wid-content">
                <?php
                    $populer    = new WP_Query([
                        'post_type'     => 'menu',
                        'posts_per_page'=> 3,
                    ]);
                    while($populer->have_posts()) :  $populer->the_post();
                ?>
                <div class="post">
                    <a href="#"><img src="<?php echo get_post_meta(get_the_ID(),'image',true); ?>" /></a>
                    <div class="wrapper">
                        <h5><a href="#"><?php the_title(); ?></a></h5>
                        <span>$<?php echo get_post_meta(get_the_ID(),'mp',true);?> - $<?php echo get_post_meta(get_the_ID(),'mx',true);?></span>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>
        </div>
    <?php }
    public function form($two){ 
        $title      = $two['title'];    
    ?>
    <p>
        <label for="">Title</label>
        <input type="text" class="widefat" name="<?php echo $this->get_field_name('title');?>" value="<?php echo $title; ?>">
    </p>

    <?php }
}