<!-- Page - all Videos preview -->
<main class="main post_wrapper">

    <!-- top content: title and text-->
    <section class="post text_wrapper">
        <h1 class="title-font-style"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </section>

    <!-- list of videos preview-->
    <section class="post page__content_wrapper video">

        <?php
        // Текущая страница пагинации
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;

        // Кастомный запрос
        $video_query = new WP_Query([
            'post_type'      => 'post',
            'posts_per_page' => 9, // post per page
            'paged'          => $paged,
            'category_name'  => 'video_broadcast',
            'orderby'        => 'date',
            'order'          => 'DESC',
        ]);

        if ($video_query->have_posts()) :
            while ($video_query->have_posts()) :
                $video_query->the_post();
        ?>

                <a class="video__item_link" href="<?php the_permalink(); ?>"
                    target="_blank" rel="noopener noreferrer" title="<?php echo esc_attr(get_the_title()); ?>">
                    <div class="video__item">
                        <div class="video__item_container">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('video-thumbnails', [
                                    'class' => 'video__item_img-preview',
                                    'alt'   => esc_attr(get_the_title())
                                ]);
                            } else {
                                echo '<img class="video__item_img-preview" src="' . get_template_directory_uri() . '/assets/img/default_pict_news.jpg"
                                alt="' . esc_attr(get_the_title()) . '">';
                            }
                            ?>
                        </div>
                        <span class="video__item_title item-title-font-style">
                            <?php echo esc_html(get_the_title()); ?>
                        </span>
                        <span class="video__item_date item-title-font-style">
                            <?php echo esc_html(get_field('broadcast_date_and_time')); ?>
                        </span>
                    </div>
                </a>

        <?php
            endwhile;
        endif;
        ?>
    </section>

    <!-- Pagination -->
    <div class="pagination_wrapper video-pagination">
    
        <?php
        echo paginate_links([
            'total'   => $video_query->max_num_pages,
            'current' => $paged,
            'prev_text' => '« Назад',
            'next_text' => 'Далі »',
        ]);
        ?>
    </div>

    <?php wp_reset_postdata(); ?>
</main>