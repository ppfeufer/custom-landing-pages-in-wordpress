<?php

// Shared PHP for Landing Page Child Theme

const LANDING_PAGE_TEMPLATE_FILES = array(
	'landing-page-template-a.php',
	'landing-page-template-b.php',
	'landing-page-template-c.php'
);

// Hooks and Filters

add_action('widgets_init', 'lp_example_theme_widgets_init');

add_action('wp_enqueue_scripts', 'lp_example_theme_enqueue_assets');

add_filter('document_title_parts', 'lp_example_theme_set_landing_page_title');

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

function lp_example_theme_set_landing_page_title($title)
{
	global $post;

	if (in_array(get_page_template_slug(), LANDING_PAGE_TEMPLATE_FILES, true))
	{
		$title['title'] = $post->post_title;
		$title['site'] = '';
	}

	return $title;
}

function lp_example_theme_widgets_init()
{
	register_sidebar(array(
		'name' => 'LP Option Set 1 - Try Section',
		'id' => 'lp-opt-set-1-try-section',
		'description' => 'Use a text widget to customize the "Try" section title and text.',
		'before_widget' => '<div class="body">',
		'after_widget' => '</div>',
		'before_title' => '<h2><span class="fa-stack fa-lg"><span class="fa fa-circle fa-stack-2x"></span><span class="fa fa-cutlery fa-stack-1x fa-inverse"></span></span> ',
		'after_title' => '</h2>'
	));

	register_sidebar(array(
		'name' => 'LP Option Set 1 - Buy Section',
		'id' => 'lp-opt-set-1-buy-section',
		'description' => 'Use a text widget to customize the "Buy" section title and text.',
		'before_widget' => '<div class="body">',
		'after_widget' => '</div>',
		'before_title' => '<h2><span class="fa-stack fa-lg"><span class="fa fa-circle fa-stack-2x"></span><span class="fa fa-usd fa-stack-1x fa-inverse"></span></span> ',
		'after_title' => '</h2>'
	));

	register_sidebar(array(
		'name' => 'LP Option Set 1 - More Info Section',
		'id' => 'lp-opt-set-1-more-info-section',
		'description' => 'Use a text widget to customize the "More Info" section title and text.',
		'before_widget' => '<div class="body">',
		'after_widget' => '</div>',
		'before_title' => '<h2><span class="fa-stack fa-lg"><span class="fa fa-circle fa-stack-2x"></span><span class="fa fa-info fa-stack-1x fa-inverse"></span></span> ',
		'after_title' => '</h2>'
	));
}

?>