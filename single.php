<?php
declare(strict_types=1);

get_header('single') ?>

    <section id="wpst_content" class="wpst-content wpst-content--single">

        <?php do_action('wpst.before_single') ?>

        <main id="wpst_main" <?php post_class() ?>>
            <?php do_action('wpst.single_content') ?>
        </main>

        <?php do_action('wpst.after_single_content') ?>

    </section>

<?php
get_footer('single');
