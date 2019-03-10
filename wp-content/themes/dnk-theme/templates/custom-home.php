<?php /* Template Name: HomePage */ ?>

<?php get_header(); ?>
<?php
if ( function_exists( 'pll_current_language' ) ) {
    $locale = pll_current_language();
}
?>

<!-- main-slider-block -->
<section class="main-slider-block">
    <div class="wrapper">
        <div class="main-slider-wrapper">
            <?php get_template_part( 'templates/custom','sidebar'); ?>

            <div class="main-slider-outer">
                <div class="main-slider js-main-slider">
                    <?php $slider_main = get_field('slider_main'); ?>
                    <?php if ($slider_main) : ?>
                        <?php foreach ($slider_main as $slide) : ?>
                            <div class="main-slider__item">
                                <img src="<?php echo $slide['img']; ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main-slider-block End -->

<!-- main-cataloge-wrapper -->
<section class="main-cataloge-wrapper">
    <div class="wrapper">
        <?php get_search_form(); ?>

        <?php
        $search_get = $_GET["s"];

        if ( get_query_var('paged') ) {
            $paged = get_query_var('paged');
        } elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
            $paged = get_query_var('page');
        } else {
            $paged = 1;
        }

        $args = array(
            'post_type' => 'products',
            'posts_per_page' => 8,
            'paged' => $paged,
            's' =>$search_get,
        );

        $models_home_query  = new WP_Query( $args );
        if ( $models_home_query ->have_posts() ) {
            ?>
            <div class="main-cataloge ">
                <?php while ( $models_home_query->have_posts() ) {
                    $models_home_query->the_post();

                    get_template_part( 'templates/custom','model-single-item');
                }
                ?>
            </div>
            <?php
        }
        wp_reset_postdata();
        ?>

        <div class="nav-links">
            <?php
            echo paginate_links( array(
                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                'total'        => $models_home_query->max_num_pages,
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

    </div>
</section>
<!-- main-cataloge-wrapper End -->

<section class="main-cataloge-text-wrapper">
    <?php
        $page_object = get_queried_object();
        $page_id     = get_queried_object_id();
        $post_object = get_post( $page_id );
    ?>

    <div class="main-text-wrapper">
        <?php echo $post_object->post_content; ?>
    </div>
</section>

<section class="leave-order">
    <div class="wrapper">
        <?php $form_main = get_field('form_main') ?>
        <?php echo do_shortcode( $form_main ) ?>
    </div>
</section>

<?php get_footer(); ?>