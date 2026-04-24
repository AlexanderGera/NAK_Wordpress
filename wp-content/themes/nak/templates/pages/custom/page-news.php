<!-- Page - all News preview -->

<main class="main post_wrapper posts_news">

    <!-- top content: title and text-->
    <section class="post text_wrapper">
        <h1 class="title-font-style"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </section>

    <!-- Post list-->
    <section class="post page__content_wrapper news">

        <?php
        // become slug of current page
        $current_slug = get_post_field('post_name', get_post()->ID);
        // define pagination
        $paged = (get_query_var('paged')) ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);

        $args = [
            'post_type'      => 'post',
            'posts_per_page' => 10,
            'paged'          => $paged,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ];


        if ($current_slug === 'news') {
            $parent_cat = get_category_by_slug('news');
            if ($parent_cat) {
                $args['category_name'] = 'news'; // WP сам подтянет и вложенные посты
            }
        } else {
            $args['category_name'] = $current_slug; // Фильтр по слагу (например, religion)
        }

        $news_query = new WP_Query($args);

        // Loop
        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post();
        ?>
                <div class="news__content_item">
                    <div class="news__content_item_img-wrapper">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('news-thumbnails', [
                                'class' => 'news__content_item_img',
                                'alt'   => esc_attr(get_the_title())
                            ]);
                        } else {
                            echo '<img class="news__content_item_img" src="' . get_template_directory_uri() . '/assets/img/default_pict_news.jpg" alt="' . esc_attr(get_the_title()) . '">';
                        }
                        ?>
                    </div>

                    <div class="news__content_item_text-wrapper">
                        <span class="news__content_item_date submenu-font-style">
                            <?php echo esc_html(get_the_date('d.m.Y')); ?>
                        </span>

                        <h3 class="news__content_item_title item-title-font-style">
                            <?php echo esc_html(get_the_title()); ?>
                        </h3>

                        <span class="text-font-style">
                            <?php
                            $excerpt = get_the_excerpt();
                            $trim_excerpt = mb_strimwidth($excerpt, 0, 120, ' ...');
                            echo esc_html($trim_excerpt);
                            ?>
                        </span>

                        <a class="news__content_item-link follow text-font-style"
                            href="<?php the_permalink(); ?>"
                            title="<?php echo esc_attr(get_the_title()); ?>">
                            читати далі...
                        </a>
                    </div>
                </div>

        <?php
            endwhile;
        endif;
        ?>
    </section>

    <!-- pagination -->
    <?php if ($news_query->max_num_pages > 1) : ?>
        <div class="pagination_wrapper news-pagination">
            <?php
            echo paginate_links([
                'total'   => $news_query->max_num_pages,
                'current' => $paged,
                'prev_text' => '« Назад',
                'next_text' => 'Далі »',
            ]);
            ?>
        </div>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
</main>