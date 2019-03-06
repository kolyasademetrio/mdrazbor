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
    <div class="wrapper cataloge-page">
        <div class="main-slider-wrapper">

            <?php get_template_part( 'templates/custom','sidebar'); ?>

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


                <?php
                global $wp_query;
                $args = array(
                    'post_type' => 'products',
                    'posts_per_page' => 9,
                    'paged' => get_query_var('paged') ?: 1,
                );
                $wp_query  = new WP_Query( $args );

                if ( $wp_query ->have_posts() ) {
                    ?>
                    <div class="main-cataloge ">
                        <?php
                        while ( $wp_query->have_posts() ) {
                            $wp_query->the_post();
                            ?>
                            <a href="<?php echo $url = get_post_permalink(get_the_ID()); ?>" class="cataloge-item">
                                <div class="cataloge-item__img" style="background: url(<?php echo get_field('model_img', get_the_ID()); ?>) no-repeat 50% 50%;">
                                </div>
                                <div class="cataloge-item__name">
                                    <?php the_title(); ?>
                                </div>
                                <div class="cataloge-item__age">
                                    <?php $categories = wp_get_post_categories(get_the_ID(), array('fields' => 'names')); ?>
                                    <?php if ( !empty($categories) ) : ?>
                                        <?php
                                            $result = array();
                                            foreach ( $categories as $category ) {
                                                $result[] = '<span>'.$category .'</span> г.';
                                            }
                                            $result = implode( ', ', $result );
                                            echo $result;
                                        ?>
                                    <?php endif; ?>
                                </div>
                                <div class="cataloge-item__parts">в наличии <span>85</span> з/ч</div>
                            </a>
                        <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                    <?php
                }
                ?>

                <?php
                the_posts_pagination( array(
                    'prev_text'          => __( '«', 'twentyfifteen' ),
                    'next_text'          => __( '»', 'twentyfifteen' ),
                ) );
                ?>

                <?php
                $page_object = get_queried_object();
                $page_id     = get_queried_object_id();
                $post_object = get_post( $page_id );
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
