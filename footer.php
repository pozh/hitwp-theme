<?php
/**
 * The template for displaying the footer.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HitWP
 */
?>
<footer class="footer">
    <div class="container">

        <ul class="footer__social">
            <li class="social"><a href="https://github.com/pozh" _target="blank"><i class="ion"></i><span>Github</span></a></li>
            <li class="social"><a href="https://dribbble.com/Serggg" _target="blank"><i class="ion"></i><span>Dribbble</span></a></li>
            <li class="social"><a href="https://twitter.com/serggg" _target="blank"><i class="ion"></i><span>Twitter</span></a></li>
            <li class="social"><a href="https://twitter.com/serggg" _target="blank"><i class="ion"></i><span>LinkedIn</span></a></li>
        </ul>

        <div class="footer__contact">
            <a href="mailto:hello@hitwp.com">hello@hitwp.com</a>
        </div>

        <div class="footer__copyright">
            <p>
                Copyright &copy; 2018 HitWP.<br>
                All Rights Reserved.
            </p>
        </div>

        <div class="footer__menu">
            <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
