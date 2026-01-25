
<?php
get_header();

if (is_page('news')) {
    get_template_part('templates/pages/custom/page-news');
} elseif (is_page('videos')) {
    get_template_part('templates-page/custom/page-videos');
} else {
    get_template_part('templates/pages/page-default');
}

get_footer();
?>