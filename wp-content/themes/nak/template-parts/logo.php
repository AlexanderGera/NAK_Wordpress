<!-- insert Logo in Header and in Footer -->
<?php

$logo_link = get_field('logo_link', 12);
$logo = get_field('seit_logo', 12);

if ($logo):
?>
    <a href="<?php echo $logo_link ? esc_url($logo_link['url']) : esc_url(home_url('/')); ?>"
        title="<?php echo esc_attr($logo_link['title']); ?>">
        <img
            class="header__logo"
            src="<?php echo esc_url($logo['url']); ?>"
            alt="<?php echo esc_attr($logo['alt']); ?>">
    </a>
<?php endif;
?>