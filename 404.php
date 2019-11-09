<?php
declare(strict_types=1);

get_header('404');
?>
    <section id="wpst_content" class="wpst-content wpst-content--404">

        <?php do_action('wpst.before_404') ?>

        <main id="wpst_main" class="wpst-content__main">
            <?php do_action('wpst.404_content') ?>
        </main>

        <?php do_action('wpst.after_404') ?>

    </section>

<?php
get_footer('404');
