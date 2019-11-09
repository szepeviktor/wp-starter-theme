<?php
declare(strict_types=1);

get_header('author');
?>

    <section id="wpst_content" class="wpst-content wpst-content--author">

        <?php do_action('wpst.before_author') ?>

        <main id="wpst_main" class="wpst-content__main">
            <?php do_action('wpst.author_content') ?>
        </main>

        <?php do_action('wpst.after_author') ?>

    </section>

<?php
get_footer('author');
