<?php
$news_posts = get_posts([
    'numberposts' => 3,
    'category_name' => 'news',
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
]);

global $post;

foreach ($news_posts as $post) :
    setup_postdata($post);
?>
    <a class="news__content_item-link" href="<?php the_permalink(); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
        <div class="news__content_item">
            <div class="news__content_item_img-wrapper">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('news-thumbnails', [
                        'class' => 'news__content_item_img',
                        'alt'   => esc_attr(get_the_title())
                    ]);
                } else {
                    // fallback-picture
                    echo '<img class="news__content_item_img" src="' . get_template_directory_uri() . '/assets/img/default_pict_news.jpg" alt="' . esc_attr(get_the_title()) . '">';
                }
                ?>
            </div>
            <span class="news__content_item_date submenu-font-style">
                <?php echo esc_html(get_the_date('d.m.Y')); ?>
            </span>
            <h3 class="news__content_item_title item-title-font-style">
                <?php echo esc_html(get_the_title()); ?>
            </h3>
        </div>
    </a>
<?php
endforeach;

wp_reset_postdata();
?>