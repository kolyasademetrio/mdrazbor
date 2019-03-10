<a href="<?php echo $url = get_post_permalink(get_the_ID()); ?>" class="cataloge-item">
    <div class="cataloge-item__img" style="background: url(<?php echo get_field('model_img', get_the_ID()); ?>) no-repeat 50% 50%;">
    </div>
    <div class="cataloge-item__name">
        <?php the_title(); ?>
    </div>
    <div class="cataloge-item__age">
        <?php $model_years = get_field('model_years', get_the_ID()); ?>

        <?php if ( !empty($model_years) ) : ?>
            <?php
            $result = array();
            foreach ( $model_years as $year ) {
                $result[] = '<span>'.$year['year'] .'</span> г.';
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