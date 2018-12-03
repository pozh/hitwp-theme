<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HitWP
 */

get_header(); ?>
    <header class="hero hero_home js-hero-home" id="scene" data-selector=".scene-child">
        <div class="hero__bg"><div data-depth="0.1" class="scene-child"> </div></div>
        <div class="container position-relative">
        <div class="hero__wrapper js-hero-content" data-depth="0.4">
            <h1 class="hero__title hero__title_home js-hero-title">WordPress<br>Solutions</h1>
            <h2 class="hero__caption js-hero-caption">
                Websites, Online Stores, Membership Sites, Custom Plugins. Nicely designed and built using WordPress.
            </h2>
        </div>
        </div>
    </header>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
<?php
get_footer();
