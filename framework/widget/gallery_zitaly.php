<?php
    class gallery_zitaly extends WP_Widget{
        public function __construct(){
            parent::__construct('gallery_zitaly','Zilaty Image Gallery',[
                'description'       => 'Total Latest Food will be appear here',
            ]);
        }
        public function widget($one , $two){ 
            $title      = $two['title']; 
        ?>
        <div class="widget wid-gallery">
            <div class="wid-header">
                <h5><?php echo $title; ?></h5>
            </div>
            <div class="wid-content">
                <?php
                    $gallery    = new WP_Query([
                        'post_type'     => 'gallery',
                        'posts_per_page'=> 6,
                    ]);
                    while($gallery->have_posts()) :  $gallery->the_post();
                    ?>
                <a href="#"><?php the_post_thumbnail(); ?></a>
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