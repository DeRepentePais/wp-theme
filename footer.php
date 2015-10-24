<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package De_repente_pais
 */
?>
<!-- google_ad_section_end -->

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-right">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>
    </div> 
    <div class="footer-left">
        <?php
        wp_nav_menu(
                array(
                    'theme_location' => 'footer',
                    'menu_class' => 'menu',
                )
        );
        ?>
        <?php printf(esc_html__('%1$s by %2$s.', 'derepentepais'), 'derepentepais', '<a href="https://github.com/rzani" rel="designer">Rodrigo Zani</a>'); ?>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
