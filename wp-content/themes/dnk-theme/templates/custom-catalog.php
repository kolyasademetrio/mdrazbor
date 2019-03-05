<?php /* Template Name: CatalogPage */ ?>

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
            Каталог
        </li>
    </ul>
</div>
<section class="main-slider-block">
    <div class="wrapper">
        <div class="main-slider-wrapper">
            <aside class="left-menu">
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


                <?php $form_1 = get_field('form_1', 'option') ?>
                <?php echo do_shortcode( $form_1 ) ?>
            </aside>

            <div class="right-wrapper">
                <?php
                $title = get_field('catalog_title');
                $subtitle = get_field('catalog_subtitle');
                ?>
                <h3 class="header">
                    <?php echo $title; ?>
                </h3>
                <p class="thin-text">
                    <?php echo $subtitle; ?>
                </p>



                <form action="" method="">
                    <div class="search-form">
                        <div class="search-wrapper">
                            <input type="search" placeholder="Поиск модели автомобиля по названию или году выпуска">
                        </div>
                        <div class="submit-wrapper">
                            <input type="submit" value="">
                        </div>
                    </div>

                </form>
                <div class="main-cataloge ">
                    <a href="" class="cataloge-item">
                        <div class="cataloge-item__img" style="background: url(img/pic_1.png) no-repeat 50% 50%;">
                        </div>
                        <div class="cataloge-item__name">Mercedes-Benz 100</div>
                        <div class="cataloge-item__age"><span>1988</span> — <span>1996</span> гг.</div>
                        <div class="cataloge-item__parts">в наличии <span>85</span> з/ч</div>
                    </a>

                    <a href="" class="cataloge-item">
                        <div class="cataloge-item__img" style="background: url(img/pic_2.png) no-repeat 50% 50%;">
                        </div>
                        <div class="cataloge-item__name">Mercedes-Benz 100</div>
                        <div class="cataloge-item__age"><span>1988</span> — <span>1996</span> гг.</div>
                        <div class="cataloge-item__parts">в наличии <span>85</span> з/ч</div>
                    </a>

                    <a href="" class="cataloge-item">
                        <div class="cataloge-item__img" style="background: url(img/pic_3.png) no-repeat 50% 50%;">
                        </div>
                        <div class="cataloge-item__name">Mercedes-Benz 100</div>
                        <div class="cataloge-item__age"><span>1988</span> — <span>1996</span> гг.</div>
                        <div class="cataloge-item__parts">в наличии <span>85</span> з/ч</div>
                    </a>

                    <a href="" class="cataloge-item">
                        <div class="cataloge-item__img" style="background: url(img/pic_4.png) no-repeat 50% 50%;">
                        </div>
                        <div class="cataloge-item__name">Mercedes-Benz 100</div>
                        <div class="cataloge-item__age"><span>1988</span> — <span>1996</span> гг.</div>
                        <div class="cataloge-item__parts">в наличии <span>85</span> з/ч</div>
                    </a>

                    <a href="" class="cataloge-item">
                        <div class="cataloge-item__img" style="background: url(img/pic_1.png) no-repeat 50% 50%;">
                        </div>
                        <div class="cataloge-item__name">Mercedes-Benz 100</div>
                        <div class="cataloge-item__age"><span>1988</span> — <span>1996</span> гг.</div>
                        <div class="cataloge-item__parts">в наличии <span>85</span> з/ч</div>
                    </a>

                    <a href="" class="cataloge-item">
                        <div class="cataloge-item__img" style="background: url(img/pic_2.png) no-repeat 50% 50%;">
                        </div>
                        <div class="cataloge-item__name">Mercedes-Benz 100</div>
                        <div class="cataloge-item__age"><span>1988</span> — <span>1996</span> гг.</div>
                        <div class="cataloge-item__parts">в наличии <span>85</span> з/ч</div>
                    </a>

                    <a href="" class="cataloge-item">
                        <div class="cataloge-item__img" style="background: url(img/pic_3.png) no-repeat 50% 50%;">
                        </div>
                        <div class="cataloge-item__name">Mercedes-Benz 100</div>
                        <div class="cataloge-item__age"><span>1988</span> — <span>1996</span> гг.</div>
                        <div class="cataloge-item__parts">в наличии <span>85</span> з/ч</div>
                    </a>

                    <a href="" class="cataloge-item">
                        <div class="cataloge-item__img" style="background: url(img/pic_4.png) no-repeat 50% 50%;">
                        </div>
                        <div class="cataloge-item__name">Mercedes-Benz 100</div>
                        <div class="cataloge-item__age"><span>1988</span> — <span>1996</span> гг.</div>
                        <div class="cataloge-item__parts">в наличии <span>85</span> з/ч</div>
                    </a>

                    <a href="" class="cataloge-item">
                        <div class="cataloge-item__img" style="background: url(img/pic_4.png) no-repeat 50% 50%;">
                        </div>
                        <div class="cataloge-item__name">Mercedes-Benz 100</div>
                        <div class="cataloge-item__age"><span>1988</span> — <span>1996</span> гг.</div>
                        <div class="cataloge-item__parts">в наличии <span>85</span> з/ч</div>
                    </a>
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



<section class="main-cataloge-text-wrapper">

</section>




<?php get_footer(); ?>
