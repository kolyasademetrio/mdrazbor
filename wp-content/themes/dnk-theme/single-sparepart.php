<?php get_header(); ?>
<?php
if ( function_exists( 'pll_current_language' ) ) {
    $locale = pll_current_language();
}
?>

<!-- BEGIN CONTENT -->
<div class="popup js-popup">
    <div class="cross">
        <div class="line top-line"></div>
        <div class="line bottom-line"></div>
    </div>
    <h2 class="popup__header">оставить заявку</h2>
    <div class="popup-inner">
        <ul class="left-menu-list">
            <li class="left-menu-list__item">
                <input type="text" name="number" placeholder="Ваше имя">
            </li>

            <li class="left-menu-list__item " >
                <input type="text" name="phone" placeholder="Номера телефона">
            </li>
        </ul>
        <a href="" class="btn">
            <div class="btn__inner">Отправить</div>
        </a>
    </div>

</div>
<div class="overlay js-overlay"></div>

<div class="wrapper">
    <ul class="bread-crambs">
        <li class="bread-crambs__item">
            <a href="#" class="bread-crambs__link">Главная </a>
        </li>

        <li class="bread-crambs__item">
            Каталог
        </li>
    </ul>
</div>
<section class="main-slider-block">
    <div class="wrapper cataloge-page">
        <div class="main-slider-wrapper">

            <?php get_template_part( 'templates/custom','sidebar'); ?>

            <div class="right-wrapper">
                <?php
                    $sparepart_title = get_field('sparepart_title');
                    $current_time = current_time('d.m.Y H:i');
                ?>
                <h3 class="header">
                    <?php echo $sparepart_title; ?>
                </h3>

                <div class="sort-wrapper">
                    <div class="sort-left ">
                        Товар в наличии по состоянию на <?php echo $current_time; ?>:
                    </div>
                    <!--<div class="sort-right">
                        <label for="filter">отсортировать товар по </label>
                        <select class="styled" id="filter">
                            <option>Названию детали</option>
                            <option>Дате выпуска</option>
                        </select>
                    </div>-->
                </div>

                <div class="card-list-wrapper">
                    <ul class="card-list">
                        <li class="card-list__item">
                            <a href="<?php echo get_permalink(); ?>" class="card-list__link">
                                <div class="card-list-img-wrapper">
                                    <?php
                                        $sparepart_image = get_field('sparepart_image');
                                        $sparepart_image_url = $sparepart_image['sizes']['sparepart-featured-image'];
                                        $sparepart_image_large_url = $sparepart_image['sizes']['sparepart-featured-image'];
                                        $sparepart_code = get_field('sparepart_code');
                                        $sparepart_carmodel = get_field('sparepart_carmodel');
                                        $sparepart_params = get_field('sparepart_params');
                                        $sparepart_price = get_field('sparepart_price');
                                        $sparepart_qty = get_field('sparepart_qty');
                                        $sparepart_added_top = get_field('sparepart_added_top');
                                        $sparepart_added_bottom = get_field('sparepart_added_bottom');
                                        $sparepart_model_link = get_field('sparepart_model_link');
                                        $sparepart_additional = get_field('sparepart_additional');
                                        $sparepart_qstns_history = get_field('sparepart_qstns_history');
                                    ?>

                                    <div class="card-list__img" style="background: url(<?php echo $sparepart_image_url; ?>) no-repeat 50% 50%;">
                                    </div>
                                    <div class="card-list__name-wrapper">
                                        <div class="card-list__name_top ">
                                            <div class="thin-text">Артикул: <?php echo $sparepart_code; ?></div>
                                            <div class="thin-text">
                                                <?php echo $sparepart_carmodel; ?>
                                            </div>
                                        </div>
                                        <div class="card-list__name_bottom">
                                            <?php echo get_the_title(); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-list-info-wrapper">
                                    <div class="card-list-param-wrapper">
                                        <div class="card-list-param">Параметры:</div>
                                        <div class="card-list-param thin-text">
                                            <?php if ( !empty($sparepart_params) ) : ?>
                                                <?php foreach ( $sparepart_params as $sp_param ) : ?>
                                                    <?php echo $sp_param['item']; ?>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="card-list-price-wrapper">
                                        <div class="card-list-price"><?php echo $sparepart_price; ?> р.</div>
                                        <div class="card-list-availability">
                                            <?php echo $sparepart_qty > 0 ? 'на складе' : 'нет в наличии'; ?>
                                        </div>
                                        <div class="card-list-answer">Задать вопрос</div>
                                        <div class="card-list-buy btn buy__btn">купить</div>
                                    </div>
                                </div>

                            </a>
                        </li>
                    </ul>
                </div>

                <div class="single-item-wrapper">
                    <ul class="single-item-list">
                        <li class="single-item-list__item">

                            <div class="card-list-img-wrapper">
                                <div class="card-list__img" style="background: url(<?php echo $sparepart_image_large_url; ?>) no-repeat 50% 50%;">

                                </div>
                            </div>

                            <div class="card-list-info-wrapper">
                                <div class="card-list-param-wrapper">
                                    <div class="card-list-param">Технические характеристики:</div>
                                    <div class="card-list-param thin-text">
                                        <?php echo $sparepart_added_top; ?>
                                    </div>
                                    <div class="card-list-price-info grey thin-text">
                                        <?php echo $sparepart_added_bottom; ?>
                                    </div>
                                    <div class="card-list-price"><?php echo $sparepart_price; ?> р.</div>
                                    <div class="card-list-availability">
                                        <?php echo $sparepart_qty > 0 ? 'на складе' : 'нет в наличии'; ?>
                                    </div>
                                    <div class="card-list-buy btn buy__btn">купить</div>
                                </div>
                            </div>
                        </li>
                        <li class="single-item-list__item"></li>
                    </ul>

                    <a href="<?php echo $sparepart_model_link; ?>" class="single-item__link">посмотрите <span>другие детали на Mercedes-Benz 190 (W201)</span></a>
                    <div class="single-item-additional-decription">
                        <?php echo $sparepart_additional; ?>
                    </div>
                    <?php if ( !empty($sparepart_qstns_history) ) : ?>
                    <div class="answer-wrapper">
                        <div class="answer-header bordered js-answer-header">
                            История вопросов по <?php echo get_the_title(); ?>:
                        </div>
                        <div class="answer-hidden">
                            <div class="table bordered">

                                <div class="row">
                                    <div class="col col_7">Город</div>
                                    <div class="col col_8">Год</div>
                                    <div class="col col_9">Комментарий</div>
                                </div>

                                <?php foreach ( $sparepart_qstns_history as $history_i ) : ?>
                                    <div class="row">
                                        <div class="col col_7">
                                            <?php echo $history_i['city']; ?>
                                        </div>
                                        <div class="col col_8">
                                            <?php echo $history_i['year']; ?>
                                        </div>
                                        <div class="col col_9">
                                            <?php echo $history_i['comment']; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>

    </div>

</section>

<?php get_footer(); ?>
