<?php
get_header();
?>
<!--header end-->
<!--big banner-->
<div class="banner__wrapper">
    <div class="banner__text-wrapper">
        <?php
        $banner_title = get_field('banner_bg_top_title');
        if (!empty($banner_title)): ?>
            <h2 class="banner__text-title title-font-style">
                <?php echo esc_html($banner_title); ?>
            </h2>
        <?php endif;
        ?>
    </div>
    <div class="banner__img"
        style="background-image: url('<?php echo esc_url(get_field('banner_bg_top')); ?>');">
    </div>
</div>
<main class="main">
    <!--    news and announcements section -->
    <section class="news">
        <div class="news__title_wrapper section__title_wrapper">
            <h2 class="news__title section__title_font-style">Новини</h2>
        </div>
        <div class="news__content_wrapper">
            <a class="news__content_item-link" href="#">
                <div class="news__content_item">
                    <div class="news__content_item_img-wrapper">
                        <img class="news__content_item_img" src="<?php echo get_template_directory_uri() . '/assets/img/' ?>jule.jpg"
                            alt="Запрошуємо подивитися трансляцію Богослужіння з Св. Царенко">
                    </div>
                    <span class="news__content_item_date submenu-font-style">18/11/2025</span>
                    <h3 class="news__content_item_title item-title-font-style">Запрошуємо подивитися трансляцію
                        Богослужіння з Св. Царенко</h3>
                </div>
            </a>
            <a class="news__content_item-link" href="#">
                <div class="news__content_item">
                    <div class="news__content_item_img-wrapper">
                        <img class="news__content_item_img" src="<?php echo get_template_directory_uri() . '/assets/img/' ?>nak_16.jpg"
                            alt="Більше моментів Дня Подяки у наших громадах">
                    </div>
                    <span class="news__content_item_date submenu-font-style">10/11/2025</span>
                    <h3 class="news__content_item_title item-title-font-style">Більше моментів Дня Подяки у наших
                        громадах</h3>
                </div>
            </a>
            <a class="news__content_item-link" href="#">
                <div class="news__content_item">
                    <div class="news__content_item_img-wrapper">
                        <img class="news__content_item_img" src="<?php echo get_template_directory_uri() . '/assets/img/' ?>nak_1.jpg"
                            alt="Запрошуємо подивитися трансляцію Богослужіння з Св. Царенко">
                    </div>
                    <span class="news__content_item_date submenu-font-style">25/10/2025</span>
                    <h3 class="news__content_item_title item-title-font-style">Запрошуємо подивитися трансляцію
                        Богослужіння з Св. Царенко</h3>
                </div>
            </a>
        </div>
    </section>
    <section class="announcement">
        <div class="announcement__title_wrapper section__title_wrapper">
            <h2 class="announcement__title section__title_font-style">Повідомлення</h2>
        </div>
        <div class="announcement__content_wrapper">
            <div class="announcement__items_wrapper">
                <a class="announcement__item_link" href="#">
                    <div class="announcement__item">
                        <div class="announcement__item_img-wrapper">
                            <img class="announcement__item_img" src="<?php echo get_template_directory_uri() . '/assets/img/' ?>jule.jpg"
                                alt="Оголошення 1">
                        </div>
                        <div class="announcement__item_text-holder">
                            <span class="announcement__item_date submenu-font-style">15/11/2025</span>
                            <h3 class="announcement__item-title item-title-font-style">Оголошення про майбутні
                                події</h3>
                        </div>
                    </div>
                </a>
                <a class="announcement__item_link" href="#">
                    <div class="announcement__item">
                        <div class="announcement__item_img-wrapper">
                            <img class="announcement__item_img" src="<?php echo get_template_directory_uri() . '/assets/img/' ?>nak_1.jpg"
                                alt="Оголошення 1">
                        </div>
                        <div class="announcement__item_text-holder">
                            <span class="announcement__item_date submenu-font-style">15/11/2025</span>
                            <h3 class="announcement__item-title item-title-font-style">Оголошення про майбутні
                                події</h3>
                        </div>
                    </div>
                </a>
                <a class="announcement__item_link" href="#">
                    <div class="announcement__item">
                        <div class="announcement__item_img-wrapper">
                            <img class="announcement__item_img" src="<?php echo get_template_directory_uri() . '/assets/img/' ?>nak_16.jpg"
                                alt="Оголошення 1">
                        </div>
                        <div class="announcement__item_text-holder">
                            <span class="announcement__item_date submenu-font-style">15/11/2025</span>
                            <h3 class="announcement__item-title item-title-font-style">Оголошення про майбутні
                                події</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="announcement__banners_wrapper">
                <div class="announcement__banner_item">
                    <a href="https://www.nak-west.de/pfingsten2025" target="_blank" rel="noopener noreferrer"
                        title="Ссылка на якийсь ресурс">
                        <img class="announcement__banner_item_img" src="<?php echo get_template_directory_uri() . '/assets/img/' ?>Banner_pfingsten-2025-10zu1-01.png"
                            alt="Pfingsten 2025">
                    </a>
                </div>
                <div class="announcement__banner_item">
                    <a href="https://www.iyc2019.org/?_ld=1" target="_blank" rel="noopener noreferrer"
                        title="International Youth Convention 2019">
                        <img class="announcement__banner_item_img" src="<?php echo get_template_directory_uri() . '/assets/img/' ?>Banner_Website_IJT-Rückblick1.png"
                            alt="International Youth Convention 2019">
                    </a>
                </div>
                <div class="announcement__banner_item">
                    <a href="https://www.iyc2019.org/?_ld=1" target="_blank" rel="noopener noreferrer"
                        title="International Youth Convention 2019">
                        <img class="announcement__banner_item_img" src="<?php echo get_template_directory_uri() . '/assets/img/' ?>Banner_Website_IJT-Rückblick1.png"
                            alt="International Youth Convention 2019">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--    links to video broadcasts -->
    <section class="video__section">
        <div class="video__title_wrapper section__title_wrapper">
            <h2 class="video__title section__title_font-style">Записи трансляції</h2>
        </div>
        <div class="video__section_wrapper">
            <a class="video__item_link" href="https://www.youtube.com/live/Ouo8rRybe58?si=9KalpkBt-N26zqez"
                target="_blank" rel="noopener noreferrer" title="Богослужіння ОЄ Туркевичем">
                <div class="video__item">
                    <div class="video__item_container">
                        <img class="video__item_img-preview" src="<?php echo get_template_directory_uri() . '/assets/img/' ?>Broadkast_30_11_25.jpg"
                            alt="Богослужіння ОЄ Туркевичем">
                    </div>
                    <span class="video__item_title item-title-font-style">Богослужіння ОЄ Туркевичем</span>
                    <span class="video__item_date item-title-font-style">30 листопада 2025 о 10:00</span>
                </div>
            </a>
            <a class="video__item_link" href="https://www.youtube.com/live/XOzClW8PGxA?si=B3T4oM7uSne2NBem"
                target="_blank" rel="noopener noreferrer" title="Богослужіння з Ап. Будником">
                <div class="video__item">
                    <div class="video__item_container">
                        <img class="video__item_img-preview" src="<?php echo get_template_directory_uri() . '/assets/img/' ?>Broadkast_16_11_25.jpg"
                            alt="Богослужіння ОЄ Туркевичем">
                    </div>
                    <span class="video__item_title item-title-font-style">Богослужіння з Ап. Будником</span>
                    <span class="video__item_date item-title-font-style">16 листопада 2025 о 10:00</span>
                </div>
            </a>
            <a class="video__item_link" href="https://www.youtube.com/live/rQMfkcvMQQE?si=sKIuiidYTverJQWb"
                target="_blank" rel="noopener noreferrer" title="Богослужіння Окружного Апостола Міхаєля Еріха">
                <div class="video__item">
                    <div class="video__item_container">
                        <img class="video__item_img-preview" src="<?php echo get_template_directory_uri() . '/assets/img/' ?>Broadkast_2_11_25.jpg"
                            alt="Богослужіння ОЄ Туркевичем">
                    </div>
                    <span class="video__item_title item-title-font-style">Богослужіння Окружного Апостола Міхаєля Еріха</span>
                    <span class="video__item_date item-title-font-style">02 листопада 2025 об 11:00</span>
                </div>
            </a>
            <a class="video__item_link" href="https://www.youtube.com/live/bm6oC4VLsrI?si=oeFDd8mXCgSndB_d"
                target="_blank" rel="noopener noreferrer"
                title="Богослужіння з Першоапостола Жана-Люка Шнайдера">
                <div class="video__item">
                    <div class="video__item_container">
                        <img class="video__item_img-preview" src="<?php echo get_template_directory_uri() . '/assets/img/' ?>Broadkast_29_06_25.jpg"
                            alt="Богослужіння ОЄ Туркевичем">
                    </div>
                    <span class="video__item_title item-title-font-style">Богослужіння з Першоапостола Жана-Люка Шнайдера</span>
                    <span class="video__item_date item-title-font-style">29 червня 2025 об 11:00</span>
                </div>
            </a>
        </div>
    </section>
    <!-- section with searching form -->
    <?php
    get_footer();
    ?>