<?php

function custom_enqueue_style() {
    $parent_style = 'parent-style';
//    wp_enqueue_style( $parent_style, get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );

//	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/regular.css" integrity="sha384-R7FIq3bpFaYzR4ogOiz75MKHyuVK0iHja8gmH1DHlZSq4tT/78gKAa7nl4PJD7GP" crossorigin="anonymous">
//<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/brands.css" integrity="sha384-KtmfosZaF4BaDBojD9RXBSrq5pNEO79xGiggBxf8tsX+w2dBRpVW5o0BPto2Rb2F" crossorigin="anonymous">
//<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/fontawesome.css" integrity="sha384-8WwquHbb2jqa7gKWSoAwbJBV2Q+/rQRss9UXL5wlvXOZfSodONmVnifo/+5xJIWX" crossorigin="anonymous">
	wp_enqueue_style( $parent_style, get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap-grid.min.css' );
//    wp_enqueue_style( 'regular', 'https://use.fontawesome.com/releases/v5.0.10/css/regular.css', '', '');
//    wp_enqueue_style( 'brands', 'https://use.fontawesome.com/releases/v5.0.10/css/brands.css' );
//    wp_enqueue_style( 'googleFont', 'http://fonts.googleapis.com/css?family=Varela+Round' );
//    wp_enqueue_style( 'slick-slider', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css' );
    wp_enqueue_style( 'css-shake', get_template_directory_uri().'/node_modules/csshake/dist/csshake.min.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.min.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'custom_enqueue_style' );

function custom_enqueue_scripts() {
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', array(), '', false);
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js', array(), '', true);
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js', array(), '', true);
    wp_enqueue_script( 'bootstrap-slider', get_stylesheet_directory_uri() . '/node_modules/bootstrap-slider/dist/bootstrap-slider.min.js', array(), '', true);
//    wp_enqueue_script( 'slick-slider', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array(), '', true);
//    wp_enqueue_script( 'check-form', get_stylesheet_directory_uri() . '/js/check-form.js', array(), '0.1', true);
    wp_enqueue_script( 'mask', get_stylesheet_directory_uri() . '/js/jquery.maskedinput.min.js', array(), '0.2', true);
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array(), '0.2', true);
    wp_enqueue_script( 'check-form', get_stylesheet_directory_uri() . '/js/check-form.js', array(), '0.1', true);

//    wp_enqueue_script( 'alert', get_stylesheet_directory_uri() . '/node_modules/bootstrap/js/dist/alert.js', array(), '', true);
}
add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );


register_nav_menus( array(
    'top'    => __( 'Top Menu', 'union' ),
    'social' => __( 'Social Links Menu', 'union' ),
    'blog' => __( 'Blog Menu', 'union' ),
    'footer' => __( 'Footer Menu', 'union' ),
) );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}


add_theme_support( 'customize-selective-refresh-widgets' );

function union_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'urob' ),
		'id'            => 'footer_1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'union' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar 1', 'urob' ),
		'id'            => 'sidebar_1',
		'description'   => __( 'Sidebar', 'union' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'union_widgets_init' );

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function is_ru_lang () {
	if(get_locale()=='ru_RU') {
		return true;
	}
	else { return false;}
}

function lang_class( $classes ) {
	if(get_locale()=='ru_RU') {
		$classes[] = 'ru_lang';
	} else {
		$classes[] = 'en_lang';
	}
	return $classes;
}
add_filter( 'body_class', 'lang_class' );


require('inc/bs4navwalker.php');

/**
 * Mail
 */
require get_parent_theme_file_path( '/inc/mail.php' );