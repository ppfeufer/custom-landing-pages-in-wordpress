<?php

// Shared PHP for Landing Page Child Theme

// Hooks and Filters

add_action('wp_enqueue_scripts', 'lp_example_theme_enqueue_assets');

// Functions

function lp_example_theme_enqueue_assets()
{
	$parent_style = 'twentyseventeen-style';

	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');

	wp_enqueue_style('landing-page-style',
		get_stylesheet_directory_uri() . '/style.css',
		array($parent_style),
		wp_get_theme()->get('Version')
	);
}

?>