
<?php
get_header();


$news_pages = ['news', 'news_ukraine', 'international_news'];

$reading_pages = ['for_reading', 'our_family', 'word_of_month', 'we_children'];

// become slug of current page
$current_slug = get_post_field('post_name', get_post()->ID);

if (in_array($current_slug, $news_pages)) {
    get_template_part('templates/pages/custom/page-news');
} elseif (in_array($current_slug, $reading_pages)) {
    get_template_part('templates/pages/custom/page-for_reading');
} elseif (is_page('video_broadcast')) {
    get_template_part('templates/pages/custom/page-video_broadcast');
} elseif (is_page('religion')) {
    get_template_part('templates/pages/custom/page-religion');
} else {
    get_template_part('templates/pages/page-default');
}

get_footer();
?>