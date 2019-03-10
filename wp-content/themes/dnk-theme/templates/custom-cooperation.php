<?php /* Template Name: CooperationPage */ ?>

<?php get_header(); ?>
<?php
if ( function_exists( 'pll_current_language' ) ) {
    $locale = pll_current_language();
}
?>

<div class="wrapper">
    <div class="wrapper">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('  '); ?>
    </div>
</div>

<section class="main-slider-block">
    <div class="wrapper">
        <div class="main-slider-wrapper">
            <?php get_template_part( 'templates/custom','sidebar'); ?>

            <div class="right-wrapper">
                <?php
                    $cooperation_title_main = get_field('cooperation_title_main');
                    $cooperation_subtitle = get_field('cooperation_subtitle');
                    $cooperation_descr = get_field('cooperation_descr');
                ?>
                <h3 class="header">
                    <?php echo $cooperation_title_main; ?>
                </h3>
                <div class="subheader bordered">
                    <?php echo $cooperation_subtitle; ?>
                </div>

                <p class="thin-text bordered" >
                    <?php echo $cooperation_descr; ?>
                </p>
                <?php $form_cooperation = get_field('form_cooperation'); ?>
                <?php echo do_shortcode($form_cooperation); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
