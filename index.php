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

get_header(); ?>
	<header class="hero" id="scene" data-selector=".scene-child">
		<div class="hero__bg"><div data-depth="0.3" class="scene-child"> </div></div>
		<div class="hero__wrapper" id="hero-content">
			<h1 class="hero__caption" id="js-greeting"
			    style="filter: blur(0px);">WordPress<br>Solutions</h1>
			<h2 class="hero__intro" id="hero-intro"
			    style="filter: blur(0px); transform: translate(0px, 0px);">
				Websites, Online Stores, Membership Sites, Custom Plugins. Nicely designed and built using WordPress.
			</h2>
		</div>
	</header>
	<article class="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
	</article>
<?php
get_footer();
