<!-- Page - all Videos preview -->
<main class="main">
    <section class="post text_wrapper">
        <h1 class="title-font-style"><?php the_title(); ?></h1>
        <?php
        the_content();
        ?>
    </section>

    <section class="post video-page__content_wrapper">
        <?php
        $video_posts = get_posts([
            'numberposts' => -1,
            'category_name' => 'video_broadcast',
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ]);
        global $post;

        foreach ($video_posts as $post) :
            setup_postdata($post);
        ?>
            <a class="video__item_link" href="<?php the_permalink(); ?>"
                target="_blank" rel="noopener noreferrer" title="<?php echo esc_attr(get_the_title()); ?>">
                <div class="video__item">
                    <div class="video__item_container">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('video-thumbnails', [
                                'class' => 'video__item_img-preview',
                                'alt' => esc_attr(get_the_title())
                            ]);
                        } else {
                            echo '<img class="video__item_img-preview" src="' . get_template_directory_uri() . '/assets/img/default_pict_news.jpg"
                    alt="' . esc_attr(get_the_title()) . '">';
                        }
                        ?>
                    </div>
                    <span class="video__item_title item-title-font-style"><?php echo esc_html(get_the_title()); ?></span>
                    <span class="video__item_date item-title-font-style"><?php echo esc_html(get_field('broadcast_date_and_time')); ?></span>
                    <!-- <a class="news__content_item-link follow text-font-style" href="<?php the_permalink(); ?>" title="<?php echo esc_attr(get_the_title()); ?>">читати далі...</a> -->
                </div>
            </a>

        <?php
        endforeach;

        wp_reset_postdata();
        ?>
    </section>


</main>