<aside class="left-menu">
    <ul class="left-menu-list ">
        <li class="left-menu-list__item">
            <?php
                $args_s = array(
                    'post_type' => 'products',
                    'posts_per_page' => -1,
                    'paged' => get_query_var('paged') ?: 1,
                );
                $wp_query_s  = new WP_Query( $args_s );

                if ( $wp_query_s ->have_posts() ) {
                    ?>
                    <select class="styled">
                        <option val="">Выберите марку</option>
                        <?php
                        while ($wp_query_s->have_posts()) {
                            $wp_query_s->the_post();
                            ?>
                                <option val="<?php echo get_the_permalink(); ?>">
                                    <?php echo get_the_title(); ?>
                                </option>
                            <?php
                        }
                        ?>
                    </select>
                    <?php
                }
                wp_reset_postdata();
            ?>

        </li>

        <li class="left-menu-list__item">
            <select class="styled">
                <option>Алматы</option>
                <option>Еще что-то</option>
            </select>
        </li>
    </ul>

    <a href="" class="btn blue__btn pass-to-model">
        <div class="btn__inner">перейти к каталогу</div>
    </a>

    <?php $form_1 = get_field('form_1', 'option') ?>
    <?php echo do_shortcode( $form_1 ) ?>
</aside>