<?php

    add_action('after_setup_theme','our_theme_setup');
    function our_theme_setup(){
        
        add_theme_support( 'title-tag' );
        add_theme_support( 'menus' );
        add_theme_support( 'widgets' );
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-background' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats',['audio','video','gallery'] );

        register_nav_menus([
            'main_manu'         => 'Main Menu',
        ]);

        register_post_type('notice',[
            'public'            => true,
            'labels'            => [

                'name'          => 'Notice',
                'add_new'       => 'Add New Notice',
                'all_items'     => 'All Notice',
                'add_new_item'  => 'Add New Notice',

            ],
            'supports'          => ['title','editor','thumbnail'],
            'menu_icon'         => 'dashicons-heart'

        ]);

        register_post_type( 'menu', [
            'public'            => true,
            'labels'            => [
                'name'          => 'Zitaly Menu',
                'add_new'       => 'Add New Menu',
                'all_items'     => 'All Menu',
                'add_new_item'  => 'Add New Menu',
            ],
            'supports'          => ['title','thumbnail'],
            'menu_icon'         => 'dashicons-food',
        ]);

        register_post_type( 'gallery', [
            'public'            => true,
            'labels'            => [
                'name'          => 'Zitaly Gallery',
                'add_new'       => 'Add New Gallery',
                'all_items'     => 'All Gallery',
                'add_new_item'  => 'Add New Gallery',
            ],
            'supports'          => ['title','thumbnail'],
            'menu_icon'         => 'dashicons-format-image',
        ]);

    }
    add_action( 'widgets_init','sidebar' );
    function sidebar(){
        register_sidebar([
            'name'          => 'Page SideBar',
            'id'            => 'page_sidebar',
            'description'   => 'This is Page Sidebar'
        ]);
        
        register_widget('about_us_zitaly');
        register_widget('populer_food_zitaly');
        register_widget('gallery_zitaly');
    }

    

    add_action( 'wp_enqueue_scripts','zitalyfood_links' );
    function zitalyfood_links(){

        wp_enqueue_style( 'zitaly-zerogrid',get_template_directory_uri().'/css/zerogrid.css' ); 
        wp_enqueue_style( 'zitaly-style',get_template_directory_uri().'/css/style.css' ); 
        wp_enqueue_style( 'zitaly-slide',get_template_directory_uri().'/css/slide.css' ); 
        wp_enqueue_style( 'zitaly-menu',get_template_directory_uri().'/css/menu.css' ); 
        wp_enqueue_style( 'zitaly-menu',get_template_directory_uri().'/font-awesome/css/font-awesome.css' ); 
        wp_enqueue_style( 'zitaly-theme_style',get_stylesheet_uri() ); 

        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'zitaly-classie',get_template_directory_uri().'/js/classie.js',['jquery'],true,true );
        wp_enqueue_script( 'zitaly-demo',get_template_directory_uri().'/js/demo.js',['jquery','zitaly-classie'],true,true );

    }

    //Redux Framework
    require_once "framework/redux/ReduxCore/framework.php";
    require_once "framework/redux/sample/config.php";

    //TGM Framework
    require_once "framework/tgm/example.php";

    //CMB Framework
    require_once "framework/CMB/init.php";
    require_once "framework/CMB/config.php";

    //Widgets
    require_once "framework/widget/about.php";
    require_once "framework/widget/populer_food.php";
    require_once "framework/widget/gallery_zitaly.php";