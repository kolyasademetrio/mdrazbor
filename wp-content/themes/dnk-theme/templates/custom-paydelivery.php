<?php /* Template Name: PayDeliveryPage */ ?>

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
            Оплата и Доставка
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
                    $paydelivery_title = get_field('paydelivery_title');
                    $paydelivery_subtitle = get_field('paydelivery_subtitle');
                    $paydelivery_tabletitle = get_field('paydelivery_tabletitle');
                    $paydelivery_list = get_field('paydelivery_list');
                ?>
                <h3 class="header">
                    <?php echo $paydelivery_title; ?>
                </h3>
                <div class="subtable">
                    <?php echo $paydelivery_subtitle; ?>
                </div>
                <div class="subheader bordered">
                    <?php echo $paydelivery_tabletitle; ?>
                </div>
                <div class="table bordered">
                    <?php if ( !empty($paydelivery_list) ) : ?>
                        <?php foreach ( $paydelivery_list as $paydelivery_listitem ) : ?>
                            <div class="row">
                                <div class="col col_4">
                                    <?php echo $paydelivery_listitem['name']; ?>
                                </div>
                                <div class="col col_5">
                                    <?php echo $paydelivery_listitem['address']; ?>
                                </div>
                                <div class="col col_6">
                                    <?php echo $paydelivery_listitem['phone']; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <?php
                $page_object = get_queried_object();
                $page_id     = get_queried_object_id();
                $post_object = get_post( $post_id );
                ?>

                <div class="main-text-wrapper">
                    <?php echo $post_object->post_content; ?>
                </div>
            </div>
        </div>

    </div>
</section>











<?php get_footer(); ?>