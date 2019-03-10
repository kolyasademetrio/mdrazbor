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
                        <?php while ( $models_archive_query->have_posts() ) {
                            $models_archive_query->the_post();

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
                <div class="main-text-wrapper">
                    <?php echo $catalog_content; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-cataloge-text-wrapper"></section>

<?php get_footer(); ?>
