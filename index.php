<?php
declare(strict_types=1);

get_header('archive');
?>

    <section id="wpst_content" class="wpst-content wpst-content--archive">

        <?php do_action('wpst.before_archive') ?>

        <main id="wpst_main" class="wpst-content__main">
            <?php do_action('wpst.archive_content') ?>
        </main>

        <?php do_action('wpst.after_archive') ?>

    </section>

<?php
get_footer('archive');
