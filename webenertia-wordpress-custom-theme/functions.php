<?php

// Shared PHP for Landing Page Child Theme

// Hooks and Filters

add_action('widgets_init', 'lp_example_theme_widgets_init');

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

function lp_example_theme_widgets_init()
{
	register_sidebar(array(
		'name' => 'LP Option Set 1 - Try Section',
		'id' => 'lp-opt-set-1-try-section',
		'description' => 'Use a text widget to customize the "Try" section title and text.',
		'before_widget' => '<div class="body">',
		'after_widget' => '</div>',
		'before_title' => '<h2><img src="https://via.placeholder.com/56.png/555/fff?text=T" alt="Try icon"> ',
		'after_title' => '</h2>'
	));

	register_sidebar(array(
		'name' => 'LP Option Set 1 - Buy Section',
		'id' => 'lp-opt-set-1-buy-section',
		'description' => 'Use a text widget to customize the "Buy" section title and text.',
		'before_widget' => '<div class="body">',
		'after_widget' => '</div>',
		'before_title' => '<h2><img src="https://via.placeholder.com/56.png/555/fff?text=B" alt="Buy icon"> ',
		'after_title' => '</h2>'
	));

	register_sidebar(array(
		'name' => 'LP Option Set 1 - More Info Section',
		'id' => 'lp-opt-set-1-more-info-section',
		'description' => 'Use a text widget to customize the "More Info" section title and text.',
		'before_widget' => '<div class="body">',
		'after_widget' => '</div>',
		'before_title' => '<h2><img src="https://via.placeholder.com/56.png/555/fff?text=MI" alt="More Info icon"> ',
		'after_title' => '</h2>'
	));
}

?>