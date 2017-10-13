<?php
/*
Template Name: Landing Page Template A
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

			<div class="try">

				<?php if (is_active_sidebar('lp-opt-set-1-try-section')) : ?>

					<?php dynamic_sidebar('lp-opt-set-1-try-section'); ?>

				<?php else: ?>

				<div class="body">

					<h2><img src="https://via.placeholder.com/56.png/555/fff?text=T" alt="Try icon"> Try</h2>

					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Curabitur blandit tempus porttitor.</p>

					<p>Donec id elit non mi porta gravida at eget metus.</p>

				</div>

				<?php endif; ?>

				<footer><button type="button">Request a Sample</button></footer>

			</div>

			<div class="buy">

				<?php if (is_active_sidebar('lp-opt-set-1-buy-section')) : ?>

					<?php dynamic_sidebar('lp-opt-set-1-buy-section'); ?>

				<?php else: ?>

				<div class="body">

					<h2><img src="https://via.placeholder.com/56.png/555/fff?text=B" alt="Buy icon"> Buy</h2>

					<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>

					<p>Curabitur blandit tempus porttitor.</p>

				</div>

				<?php endif; ?>

				<footer><button type="button">Place an Order</button></footer>

			</div>

			<div class="more-info">

				<?php if (is_active_sidebar('lp-opt-set-1-more-info-section')) : ?>

					<?php dynamic_sidebar('lp-opt-set-1-more-info-section'); ?>

				<?php else: ?>

				<div class="body">

					<h2><img src="https://via.placeholder.com/56.png/555/fff?text=MI" alt="More Info icon"> More Info</h2>

					<p>Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur.</p>

					<p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>

				</div>

				<?php endif; ?>

				<footer><button type="button">Read More</button></footer>

			</div>

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