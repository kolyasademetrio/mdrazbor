<?php /* Template Name: CatalogPage */ ?>

<?php get_header(); ?>
<?php
if ( function_exists( 'pll_current_language' ) ) {
    $locale = pll_current_language();
}
?>

<div class="wrapper">
    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('  '); ?>
</div>

<section class="main-slider-block">
    <div class="wrapper cataloge-page">
        <div class="main-slider-wrapper">

            <?php get_template_part( 'templates/custom','sidebar'); ?>

            <div class="right-wrapper">
                <?php
                $title = get_field('catalog_title', 'option');
                $subtitle = get_field('catalog_subtitle', 'option');
                $catalog_content = get_field('catalog_content', 'option');
                ?>
                <h3 class="header">
                    <?php echo $title; ?>
                </h3>
                <p class="thin-text">
                    <?php echo $subtitle; ?>
                </p>

                <!--<form role="search" id="searchform-ss" action="<?/* echo $_SERVER['REQUEST_URI']*/?>" method="get">
                    <div class="search-form">
                        <div class="search-wrapper">
                            <input type="hidden" value="product" name="post_type">
                            <input type="search" placeholder="Поиск модели автомобиля по названию или году выпуска" name="sss" id="ss" value="<?php /*echo get_search_query(); */?>">
                        </div>
                        <div class="submit-wrapper">
                            <input type="submit" value="">
                        </div>
                    </div>
                </form>-->

                <?php get_search_form(); ?>

                <?php
                $search_gets = $_GET["s"];

                if ( get_query_var('paged') ) {
                    $paged = get_query_var('paged');
                } elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
                    $paged = get_query_var('page');
                } else {
                    $paged = 1;
                }

                $args = array(
                    'post_type' => 'products',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                    's' =>$search_gets,
                );
                $models_archive_query  = new WP_Query( $args );

                if ( $models_archive_query ->have_posts() ) {
                    ?>
                    <div class="main-cataloge ">
                        <?php
                        while ( $models_archive_query->have_posts() ) {
                            $models_archive_query->the_post();
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
                                <?php
                                $parts = get_field('model_spareparts');
                                $parts_count = $parts ? count($parts) : 0;
                                $parts_summ = 0;
                                if ( $parts_count ) :
                                    foreach($parts as $part):
                                        $this_part_count = get_field('sparepart_qty', $part->ID);
                                        $parts_summ += $this_part_count;
                                    endforeach;
                                endif;
                                ?>
                                <div class="cataloge-item__parts">в наличии <span><?php echo $parts_summ; ?></span> з/ч</div>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                } else {
                    ?>
                    <p class="just-text">По вашему запросу ничего не найдено</p>
                <?php
                }
                wp_reset_postdata();
                ?>

                <div class="nav-links">
                    <?php
                    echo paginate_links( array(
                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'total'        => $models_archive_query->max_num_pages,
                        'current'      => max( 1, $paged ),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'type'         => 'plain',
                        'end_size'     => 2,
                        'mid_size'     => 1,
                        'prev_next'    => true,
                        'prev_text'          => __( '«', 'twentyfifteen' ),
                        'next_text'          => __( '»', 'twentyfifteen' ),
                        'add_args'     => false,
                        'add_fragment' => '',
                    ) );
                    ?>
                </div>

                <?php
                // Previous/next page navigation.
                /*the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                    'next_text'          => __( 'Next page', 'twentyfifteen' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
                ) );*/
                ?>



                <div class="main-text-wrapper">
                    <?php echo $catalog_content; ?>
                </div>
            </div>
        </div>

    </div>

</section>



<section class="main-cataloge-text-wrapper">

</section>




<?php get_footer(); ?>
