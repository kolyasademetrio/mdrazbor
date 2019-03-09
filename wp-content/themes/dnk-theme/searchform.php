<form role="search" id="searchform-ss" action="<?php echo home_url( '/' ); ?>" method="get">
    <div class="search-form">
        <div class="search-wrapper">
            <input type="hidden" value="product" name="post_type">
            <input type="search" placeholder="Поиск модели автомобиля по названию или году выпуска" name="s" id="s" value="<?php echo get_search_query(); ?>">
        </div>
        <div class="submit-wrapper">
            <input type="submit" value="">
        </div>
    </div>
</form>
