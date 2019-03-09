<form role="search" id="searchform-ss" action="<?php echo get_post_type_archive_link( 'products' );?>" method="get">
    <div class="search-form">
        <div class="search-wrapper">
            <input type="hidden" value="product" name="post_type">
            <input type="search" placeholder="Поиск модели автомобиля по названию или году выпуска" name="ss" id="ss" value="<?php echo $_GET['ss'] ? $_GET['ss'] : ''; ?>">
        </div>
        <div class="submit-wrapper">
            <input type="submit" value="">
        </div>
    </div>
</form>