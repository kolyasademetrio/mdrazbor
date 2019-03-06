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