<?php

//function accelerate_theme_child_styles() {
	//wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');
//}


  //function accelerate_theme_child_styles90 {
	//$parent_style = 'parent-style'; //this is 'accelerate-style' for the Accelerate theme.

	//wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	//wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',\array( $parent_style ),
	//	wp_get_theme() ->get('Version')
		//);
//}

//add_action( 'wp_enqueue_scripts', 'accelerate-theme-child_enqueue_styles' );
// old code

// new code

// Accelerate Marketing Child functions and definitions

//Enqueue scripts and styles.
function accelerate_child_scripts() {
	wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-theme-css' ));
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );