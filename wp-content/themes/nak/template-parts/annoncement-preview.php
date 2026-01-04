<?php
$annoncements_posts = get_posts(array(
    'numberposts' => 3,
    'category_name' => 'announcement',
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
));

global $post;

foreach ($annoncements_posts as $post) :
    setup_postdata($post);
?>

    <a class="announcement__item_link" href="<?php the_permalink(); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
        <div class="announcement__item">
            <div class="announcement__item_img-wrapper">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('annoncements-thumbnails', [
                        'class' => 'announcement__item_img',
                        'alt' => esc_attr(get_the_title())
                    ]);
                } else {
                    echo '<img class="announcement__item_img" src="' . get_template_directory_uri() . '/assets/img/default_pict_annoncement.jpg"
                    alt="' . esc_attr(get_the_title()) . '">';
                }
                ?>
            </div>
            <div class="announcement__item_text-holder">
                <span class="announcement__item_date submenu-font-style"><?php echo esc_html(get_the_date('d.m.Y')); ?></span>
                <h3 class="announcement__item-title item-title-font-style"><?php echo esc_html(get_the_title()); ?></h3>
            </div>
        </div>
    </a>


<?php
endforeach;

wp_reset_postdata(); 
?>