<?php
declare(strict_types=1);

get_header('page') ?>

    <div id="wpst_content" class="wpst-content wpst-content--page">

        <?php do_action('wpst.before_page') ?>

        <main id="wpst_main" <?php post_class() ?>>
            <?php do_action('wpst.page_content') ?>
        </main>

        <?php do_action('wpst.after_page_content') ?>

    </div>

<?php
get_footer('page');
