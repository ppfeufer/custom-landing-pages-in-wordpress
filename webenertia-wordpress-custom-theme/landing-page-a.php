<?php
/*
Template Name: Landing Page A
Template Post Type: post, page
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="content">

		<div class="splash">

			<h1><?php the_title(); ?></h1>

		</div>

		<div class="customer-options">

			<!-- The customer options will go here. -->

		</div>

		<main>

<?php

	while(have_posts()) : the_post();

		print '<div class="featured-image">' . get_the_post_thumbnail() . '</div>';

		the_content();

	endwhile;
?>

		</main>

	</div>

	<?php wp_footer(); ?>

</body>
</html>