<?php

$banner = $args['banner'];
$banner_link = $args['banner_link'];

if (empty($banner) || empty($banner_link)) {
    return;
}
?>

<div class="announcement__banner_item">
    <a href="<?php echo esc_url($banner_link['url']); ?>"
        target="_blank"
        rel="noopener noreferrer"
        title="<?php echo esc_attr($banner_link['title']); ?>">

        <img class="announcement__banner_item_img"
            src="<?php echo esc_url($banner['url']); ?>"
            alt="<?php echo esc_attr($banner['alt']); ?>">
    </a>

</div>