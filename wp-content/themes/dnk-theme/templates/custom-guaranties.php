<?php /* Template Name: GuarantiePage */ ?>

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
                $guaranties_title = get_field('guaranties_title');
                $guaranties_title_true = get_field('guaranties_title_true');
                $guaranties_true_list = get_field('guaranties_true_list');
                $guaranties_true_note = get_field('guaranties_true_note');
                $guaranties_title_false = get_field('guaranties_title_false');
                $guaranties_false_list = get_field('guaranties_false_list');
                $guaranties_order_title = get_field('guaranties_order_title');
                $guaranties_exchange_list = get_field('guaranties_exchange_list');
                $guaranties_exchange_note = get_field('guaranties_exchange_note');
                ?>
                <h3 class="header">
                    <?php echo $guaranties_title; ?>
                </h3>
                <p class="thin-text">
                    <?php echo $guaranties_title_true; ?>
                </p>
                <div class="table bordered">
                    <?php if ( !empty($guaranties_true_list) ) : ?>
                        <?php foreach ($guaranties_true_list as $g_item) : ?>
                            <div class="row">
                                <div class="col col_1">
                                    <?php echo $g_item['item']; ?>
                                </div>
                                <div class="col col_2">
                                    <?php echo $g_item['time']; ?>
                                </div>
                                <div class="col col_3">
                                    <?php echo $g_item['excerpt']; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <div class="subtable">
                    <?php echo $guaranties_true_note; ?>
                </div>
                <div class="subheader">
                    <?php echo $guaranties_title_false; ?>
                </div>
                <ul class="list">
                    <?php if ( !empty($guaranties_false_list) ) : ?>
                        <?php foreach ($guaranties_false_list as $gf_item) : ?>
                            <li class="list__item">
                                <?php echo $gf_item['text']; ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>

                <div class="subheader">
                    <?php echo $guaranties_order_title; ?>
                </div>
                <ul class="return-list">
                    <?php if ( !empty($guaranties_exchange_list) ) : ?>
                        <?php foreach ($guaranties_exchange_list as $eg_item) : ?>
                            <li class="return-list__item">
                                <?php echo $eg_item['text']; ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>


                <div class="attention">
                    <?php echo $guaranties_exchange_note; ?>
                </div>
            </div>
        </div>

    </div>

</section>







<?php get_footer(); ?>
