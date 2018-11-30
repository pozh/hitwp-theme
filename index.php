<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HitWP
 */

$post_id = get_the_ID();

get_header(); ?>
	<header class="hero" id="scene" data-selector=".scene-child">
		<div class="hero__bg"><div data-depth="0.3" class="scene-child"> </div></div>
		<div class="hero__wrapper" id="hero-content">
			<?php

			$post_title = get_post_meta($post_id, 'hero-title', true);
			if (empty($post_title)) $post_title = get_the_title($post_id);
			$post_caption = get_post_meta($post_id, 'hero-caption', true);
			printf( '<h1 class="hero__caption">%s</h1>', $post_title );
			if ( !empty($post_caption))
				printf( '<h2 class="hero__intro" id="hero-intro">%s</h2>', $post_caption );

			?>
		</div>
	</header>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
<?php
get_footer();
