<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php
if ( function_exists( 'pll_current_language' ) ) {
	$locale = pll_current_language();
}
?>

</div><!-- main.content -->

<!-- BEGIN FOOTER -->
<footer>
    <div class="wrapper">
        <div class="footer-wrapper_top">
            <div class="footer-wrapper">

                <?php if ( is_front_page() ) : ?>
                    <div class="footer-logo">
                        <img src="<?php bloginfo('template_url'); ?>/img/footer-logo.png" alt="">
                    </div>
                <?php else :?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo">
                        <img src="<?php bloginfo('template_url'); ?>/img/footer-logo.png" alt="">
                    </a>
                <?php endif; ?>



                <div class="footer-nav">

                    <?php $menu_name = 'footer_menu_'. $locale; ?>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'secondary',
                        'menu'            => 'footer_menu_ru',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'header-nav-list',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before' => '',
                        'link_after'  => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ) );
                    ?>
                </div>
            </div>
        </div>

        <div class="footer-wrapper_bottom">
            <div class="footer-wrapper">
                <p class="just-text">mbrazbor.kz 2019</p>
                <div class="footer-icons-list">
                    <?php
                    $facebook = get_field('facebook_link', 'option');
                    $vk = get_field('vk_link', 'option');
                    $insta = get_field('insta_link', 'option');
                    $youtube = get_field('youtube_link', 'option');

                    ?>
                    <li class="header-icons-list__item ">
                        <a href="<?php echo $facebook; ?>" class="header-icons-list__link" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/img/fb_icon.png" alt="">
                        </a>

                    </li>
                    <li class="header-icons-list__item ">
                        <a href="<?php echo $vk; ?>" class="header-icons-list__link" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/img/vk_icon.png" alt="">
                        </a>
                    </li>
                    <li class="header-icons-list__item ">
                        <a href="<?php echo $insta; ?>" class="header-icons-list__link" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/img/insta_icon.png" alt="">
                        </a>
                    </li>

                    <li class="header-icons-list__item ">
                        <a href="<?php echo $youtube; ?>" class="header-icons-list__link" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/img/youtube_icon.png" alt="">
                        </a>
                    </li>
                </div>
                <div class="dev-block">
                    <p class="just-text">Над проектом работала команда</p>
                    <a href="#" class="dev-block__link">
                        <img src="<?php bloginfo('template_url'); ?>/img/puzzle.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER EOF   -->

</div><!-- div.main-wrapper -->

<div class="icon-load"></div>

<?php wp_footer(); ?>

</body>
</html>
