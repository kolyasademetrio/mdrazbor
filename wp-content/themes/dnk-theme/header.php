<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<?php
$mainClass = '';
if ( wp_is_mobile() ) {
	$mainClass = 'is_mobile';
} ?>
<html <?php language_attributes(); ?> class="no-js <?php echo $mainClass; ?>" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<!--	<meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=yes">-->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<?php
$bodyClass = (!is_front_page()) ? 'internalPages' : 'homePage';
?>
<body <?php body_class($bodyClass); ?>>

<?php
if ( function_exists( 'pll_current_language' ) ) {
	$locale = pll_current_language();
}
?>

<!-- BEGIN BODY -->
<div class="main-wrapper <?php echo $mainClass; ?>">

    <!-- BEGIN HEADER -->
    <header>
        <div class="wrapper">
            <div class="header-wrapper">
                <div class="header-left">

                    <?php $logo = get_field('header_left_logo', 'option') ?>

                    <?php if ( is_front_page() ) : ?>
                        <div class="header-left__logo">
                            <img src="<?php echo $logo; ?>" alt="">
                        </div>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="header-left__logo">
                            <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="">
                        </a>
                    <?php endif; ?>

                    <div class="header-left__select">
                        <select class="styled">
                            <option>Алматы</option>
                            <option>Еще что-то</option>
                        </select>
                    </div>
                </div>
                <div class="header__right">
                    <?php //$menu_name = 'main_menu_'. $locale; ?>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'primary',
                        'menu'            => 'main_menu_ru',
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

                    <div class="header-icons-list">
                        <?php $phone_1 = get_field('phone_1', 'option') ?>
                        <li class="header-icons-list__item phone-menu-icon">
                            <a href="" class="header-icons-list__link">
                                <img src="<?php bloginfo('template_url'); ?>/img/phone_icon.png
									" alt="">
                            </a>
                            <a href="tel:<?php echo str_replace( array(' ', '(', ')', '-'), '', $phone_1 ); ?>" class="phone-hover"><span><?php echo $phone_1; ?></span></a>
                        </li>
                        <li class="header-icons-list__item js-search">
                            <a href="" class="header-icons-list__link">
                                <img src="<?php bloginfo('template_url'); ?>/img/search_icon.png
									" alt="">
                            </a>
                        </li>
                        <li class="header-icons-list__item main-menu-icon">
                            <a href="" class="header-icons-list__link">
                                <img src="<?php bloginfo('template_url'); ?>/img/menu_icon.png
									" alt="">
                            </a>
                        </li>
                    </div>
                    <div class="search-form search-form-header">
                        <form role="search" id="searchform-header" action="<?php echo home_url( '/' ); ?>" method="get">
                            <div class="search-wrapper">
                                <input type="hidden" value="product" name="post_type">
                                <input type="search" placeholder="Что ищем? ()" name="s">
                            </div>
                            <div class="submit-wrapper">
                                <input type="submit" value="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER EOF   -->

    <!-- BEGIN CONTENT -->
    <main class="content">




