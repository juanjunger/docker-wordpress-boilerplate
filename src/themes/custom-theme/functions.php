<?php

    # Register a new sidebar simply named 'sidebar'
    function add_widget_Support() {
        register_sidebar( array(
            'name'          => 'Sidebar',
            'id'            => 'sidebar',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'add_Widget_Support' );

    # Register a new navigation menu
    function add_Main_Nav() {
        register_nav_menu('header-menu',__( 'Header Menu' ));
    }
    add_action( 'init', 'add_Main_Nav' );
     
    # Register stylesheets
    wp_enqueue_style( 'default-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'fonts-style', get_template_directory_uri() . '/assets/css/fonts.css' );
    wp_enqueue_style( 'reset-style', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style( 'responsive-style', get_template_directory_uri() . '/assets/css/responsive.css' );

?>