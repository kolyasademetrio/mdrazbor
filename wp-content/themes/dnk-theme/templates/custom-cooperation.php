<?php /* Template Name: CooperationPage */ ?>

<?php get_header(); ?>
<?php
if ( function_exists( 'pll_current_language' ) ) {
    $locale = pll_current_language();
}
?>


<div class="wrapper">
    <ul class="bread-crambs">
        <li class="bread-crambs__item">
            <a href="#" class="bread-crambs__link">Главная </a>
        </li>

        <li class="bread-crambs__item">
            Вакансии
        </li>
    </ul>
</div>

<section class="main-slider-block">
    <div class="wrapper">

        <div class="main-slider-wrapper">
            <!--<aside class="left-menu">
                <ul class="left-menu-list ">
                    <li class="left-menu-list__item">
                        <select class="styled">
                            <option>Выберите марку</option>
                            <option>Выберите деталь</option>
                        </select>
                    </li>

                    <li class="left-menu-list__item">
                        <select class="styled">
                            <option>Алматы</option>
                            <option>Еще что-то</option>
                        </select>
                    </li>
                </ul>

                <a href="" class="btn blue__btn">
                    <div class="btn__inner">перейти к каталогу</div>
                </a>

                <?php /*$form_1 = get_field('form_1', 'option') */?>
                <?php /*echo do_shortcode( $form_1 ) */?>
            </aside>-->

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
