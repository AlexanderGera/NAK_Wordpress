<!-- insert Logo in Header and in Footer -->
<?php

$logo_link = get_field('logo_link');
$logo = get_field('seit_logo');

if ($logo):
?>
    <a href="<?php echo $logo_link ? esc_url($logo_link) : esc_url(home_url('/')); ?>">
        <img
            class="header__logo"
            src="<?php echo esc_url($logo['url']); ?>"
            alt="<?php echo esc_attr($logo['alt']); ?>"
            title="<?php echo esc_attr($logo['title']); ?>">
    </a>
<?php endif;
?>