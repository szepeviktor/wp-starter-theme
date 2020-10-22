<?php
declare(strict_types=1);

get_header('attachment');
?>

    <section id="wpst_content" class="wpst-content wpst-content--attachment">

        <?php do_action('wpst.before_attachment_content') ?>

        <main id="wpst_main" <?php post_class() ?>>
            <?php do_action('wpst.attachment_content') ?>
        </main>

        <?php do_action('wpst.after_attachment_content') ?>

    </section>

<?php
get_footer('attachment');
