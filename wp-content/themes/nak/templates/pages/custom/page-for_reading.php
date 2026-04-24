<!-- Page - all News preview -->

<main class="main post_wrapper posts_news">
    <section class="post text_wrapper">
        <h1 class="title-font-style"><?php the_title(); ?></h1>
        <?php while (have_posts()) : the_post();
            the_content();
        endwhile; ?>
    </section>

    <section class="post page__content_wrapper reading">
        <div class="post-preview_list">
            <?php
            $current_slug = get_post_field('post_name', get_post()->ID);
            $paged = (get_query_var('paged')) ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);

            $args = [
                'post_type'      => 'post',
                'posts_per_page' => 10,
                'paged'          => $paged,
                'category_name'  => $current_slug, // slug of page
                'orderby'        => 'date',
                'order'          => 'DESC',
            ];

            $read_query = new WP_Query($args);

            if ($read_query->have_posts()) :
                while ($read_query->have_posts()) : $read_query->the_post();

                    // Ищем PDF: прикрепленный файл или произвольное поле 'pdf_link'
                    $attached_pdf = get_attached_media('application/pdf', get_the_ID());
                    $pdf_url = !empty($attached_pdf) ? wp_get_attachment_url(array_key_first($attached_pdf)) : get_post_meta(get_the_ID(), 'pdf_link', true);

                    $final_link = $pdf_url ? $pdf_url : get_permalink();
                    $target = $pdf_url ? 'target="_blank" rel="noopener noreferrer"' : '';
            ?>
                    <div class="news__content_item">
                        <div class="news__content_item_img-wrapper">
                            <a href="<?php echo esc_url($final_link); ?>" <?php $target; ?>>
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
                            <span class="news__content_item_date submenu-font-style"><?php echo get_the_date('d.m.Y'); ?></span>
                            <h3 class="news__content_item_title item-title-font-style">
                                <a href="<?php echo esc_url($final_link); ?>" <?php echo $target; ?>>
                                    <?php echo get_the_title(); ?>
                                </a>
                            </h3>
                            <div class="text-font-style">
                                <?php
                                $excerpt = get_the_excerpt();
                                $trim_excerpt = mb_strimwidth($excerpt, 0, 120, ' ...');
                                echo esc_html($trim_excerpt);
                                ?>
                            </div>
                            <a class="news__content_item-link follow text-font-style" href="<?php echo esc_url($final_link); ?>" <?= $target; ?>>
                                <?php echo $pdf_url ? 'Відкрити PDF' : 'читати далі...'; ?>
                            </a>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
        <div class="post-preview_column">
            <!-- last post from cathegory "word of month" -->

            <?php
            $news_posts = get_posts([
                'numberposts' => 1,
                'category_name' => 'word_of_month',
                'orderby' => 'date',
                'order' => 'DESC',
                'post_type' => 'post',
                'suppress_filters' => true,
            ]);

            global $post;

            foreach ($news_posts as $post) :
                setup_postdata($post);
            ?>
                <div class="post-preview_column__content-wrapper">
                    <div class="post-preview_column__title-wrapper">
                        <h3 class="news__content_item_title item-title-font-style">
                            Слово місяця
                        </h3>
                    </div>

                    <div class="content_item">
                        <h3 class="news__content_item_title item-title-font-style">
                            <?php echo esc_html(get_the_title()); ?>
                        </h3>
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
                        <div class="news__content_item_text-wrapper">
                            <span class="text-font-style">
                                <?php
                                $excerpt = get_the_excerpt();
                                $trim_excerpt = mb_strimwidth($excerpt, 0, 300, "...");
                                echo esc_html($trim_excerpt);
                                ?>
                            </span>
                            <a class="news__content_item-link follow text-font-style" href="<?php the_permalink(); ?>" title="<?php echo esc_attr(get_the_title()); ?>">читати далі...</a>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;

            wp_reset_postdata();
            ?>


        </div>
    </section>

    <?php if ($read_query->max_num_pages > 1) : ?>
        <div class="pagination_wrapper news-pagination">
            <?php
            echo paginate_links([
                'total' => $read_query->max_num_pages,
                'current' => $paged,
                'prev_text' => '« Назад',
                'next_text' => 'Далі »'
            ]);
            ?>
        </div>
    <?php endif;
    wp_reset_postdata(); ?>
</main>