<!-- Page Religion - Previews of all Items in the Religion section -->
<main class="main post_wrapper">
    <!-- top content: title and text-->
    <section class="post text_wrapper">
        <h1 class="title-font-style"><?php the_title(); ?></h1>
        <?php
        the_content();
        ?>
    </section>

    <section class="post page__content_wrapper religion">

        <?php
        $news_posts = get_posts([
            'numberposts' => -1,
            'category_name' => 'religion',
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ]);

        global $post;

        foreach ($news_posts as $post) :
            setup_postdata($post);
        ?>
            <div class="news__content_item">
                <div class="news__content_item_img-wrapper">
                    <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
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
                    </a>
                </div>
                <div class="news__content_item_text-wrapper">
                    <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
                        <h3 class="news__content_item_title item-title-font-style">
                            <?php echo esc_html(get_the_title()); ?>
                        </h3>
                        <span class="text-font-style">
                            <?php
                            $excerpt = get_the_excerpt();
                            $trim_excerpt = mb_strimwidth($excerpt, 0, 50, " ...");
                            echo esc_html($trim_excerpt);
                            ?>
                        </span>

                    </a>
                </div>
            </div>

        <?php
        endforeach;

        wp_reset_postdata();
        ?>
    </section>

</main>