
<?php
get_header();

if (is_page('news')) {
    get_template_part('templates/pages/custom/page-news');
} elseif (is_page('video_broadcast')) {
    get_template_part('templates/pages/custom/page-video_broadcast');
} else {
    get_template_part('templates/pages/page-default');
}

get_footer();
?>