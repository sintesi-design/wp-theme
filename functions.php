<?php
//register_sidebar();


register_sidebar(array(
		/*
		'name'          => __( 'Sidebar name', 'theme_text_domain' ),
		
		'description'   => '',
        'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>', 
		*/
		'id' => 'left-sidebar',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3>',
		
));
register_nav_menus(
	array(
		'menu-primario' => __( 'Menu Primario' ),
		'menu-secondario' => __( 'Menu Secondario' )
));


add_theme_support( 'post-thumbnails' );



?>