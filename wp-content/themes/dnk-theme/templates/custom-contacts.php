<?php /* Template Name: ContactsPage */ ?>

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
                    $contacts_title = get_field('contacts_title');
                    $contacts_place = get_field('contacts_place');
                    $contacts_list = get_field('contacts_list');
                ?>
                <h3 class="header">
                    <?php echo $contacts_title; ?>
                </h3>
                <div class="subheader bordered">
                    <?php echo $contacts_place; ?>
                </div>
                <ul class="contacts-icons-list">
                    <?php if ( !empty($contacts_list) ) : ?>
                        <?php foreach ( $contacts_list as $contacts_item ) : ?>
                            <li class="contacts-icons-list__item geo_icon">
                                <?php echo $contacts_item['address']; ?>
                            </li>
                            <li class="contacts-icons-list__item mail_icon">
                                <a href="mailto:<?php echo $contacts_item['email']; ?>" class="contacts-icons-list__link">
                                    <?php echo $contacts_item['email']; ?>
                                </a>
                            </li>

                            <li class="contacts-icons-list__item phone_icon">
                                <a href="tel:<?php echo str_replace( array(' ', '(', ')', '-'), '', $contacts_item['phone'] ); ?>" class="contacts-icons-list__link">
                                    <?php echo $contacts_item['phone']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>

                <div id="map"></div>
            </div>
        </div>

    </div>

</section>






<?php get_footer(); ?>