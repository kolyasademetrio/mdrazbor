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
    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('  '); ?>
</div>

<section class="main-slider-block">
    <div class="wrapper cataloge-page">
        <div class="main-slider-wrapper">
            <?php get_template_part( 'templates/custom','sidebar'); ?>

            <div class="right-wrapper">
                <h3 class="header">
                    <?php echo get_field('model_title'); ?>
                </h3>
                <form role="search" id="searchform-sp" action="" method="get">
                    <div class="search-form">
                        <div class="search-wrapper">
                            <input type="hidden" value="sparepart" name="post_type">
                            <input type="search" placeholder="Поиск нужной детали" name="sp" id="sp">
                        </div>
                        <div class="submit-wrapper">
                            <input type="submit" value="">
                        </div>
                    </div>
                </form>
                <?php $search_query = $_GET["sp"]; ?>
                <?php $parts = get_field('model_spareparts'); ?>
                <?php
                if ( $search_query && $parts ) :
                    $parts = array_filter( $parts, function ($part) use ($search_query) {
                        if (mb_stripos($part->post_title, $search_query) !== false) {
                            return true;
                        }
                    });
                endif;
                ?>

                <?php if ( !empty($parts) ) : ?>
                    <?php $categories; ?>
                    <?php foreach ( $parts as $part_i ) : ?>
                        <?php
                        $part_ID = $part_i->ID;
                        $cat_name = get_the_category( $part_i->ID )[0]->name;
                        $categories[$cat_name]['ids'][] = $part_ID;
                        $categories[$cat_name]['cat_name'] = $cat_name;
                        ?>
                    <?php endforeach; ?>

                    <?php foreach ( $categories as $category_i ) : ?>
                        <div class="answer-wrapper card-answer-wrapper">
                            <div class="answer-header bordered thin-text js-answer-header">
                                <?php
                                    $qty_summ = 0;
                                    if ( !empty($category_i['ids']) ) {
                                        foreach ( $category_i['ids'] as $id_i ) {
                                            $qty_summ += get_field('sparepart_qty', $id_i);
                                        }
                                    }
                                ?>
                                <?php echo $category_i['cat_name'] . '(' . $qty_summ . ')'; ?>
                            </div>
                            <div class="answer-hidden">
                                <div class="card-list-wrapper">
                                    <ul class="card-list-parts">
                                        <li class="card-list__item">
                                            <?php if ( !empty($category_i['ids']) ) : ?>
                                                <?php foreach ( $category_i['ids'] as $id ) : ?>
                                                    <a href="<?php echo get_permalink($id); ?>" class="card-list__link">
                                                        <?php $sparepart_image = get_field('sparepart_image', $id); ?>
                                                        <?php $sparepart_image_url = $sparepart_image['sizes']['sparepart-featured-image']; ?>
                                                        <div class="card-list-img-wrapper">
                                                            <div class="card-list__img" style="background: url(<?php echo $sparepart_image_url; ?>) no-repeat 50% 50%;">
                                                            </div>
                                                            <div class="card-list__name-item">
                                                                <?php echo get_the_title($id); ?>
                                                            </div>
                                                        </div>

                                                        <div class="card-list-info-wrapper">
                                                            <div class="card-list-param-wrapper">
                                                                <div class="card-list-price">
                                                                    <?php echo get_field('sparepart_price', $id); ?> р.
                                                                </div>
                                                                <div class="card-list-param thin-text grey">
                                                                    в наличии <?php echo get_field('sparepart_qty', $id); ?> запчасти
                                                                </div>
                                                            </div>
                                                            <div class="card-list-price-wrapper">
                                                                <div class="btn blue__btn">
                                                                    <div class="btn__inner">Подробнее</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php elseif( $search_query ): ?>
                    <p class="just-text">По вашему запросу запчастей не найдено</p>
                <?php else: ?>
                    <p class="just-text">Для данной модели нет запчастей</p>
                <?php endif; ?>

                <p class="just-text">
                    <?php the_field('model_common_1', 'option') ?>
                </p>
                <p class="just-text">
                    <?php the_field('model_common_2', 'option') ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="leave-order">
    <div class="wrapper">
        <?php $form_model = get_field('form_model', 'option') ?>
        <?php echo do_shortcode( $form_model ) ?>
    </div>
</section>

<?php get_footer(); ?>
