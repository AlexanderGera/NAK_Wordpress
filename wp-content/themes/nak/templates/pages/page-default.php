<?php
get_header();
?>

<main class="main">
    <section class="post">
        <h1 class="title-font-style"><?php the_title(); ?></h1>
        <?php
        the_content();
        ?>

    </section>

</main>



<?php
get_footer();
?>