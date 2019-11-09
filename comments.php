<?php
declare(strict_types=1);
?>

<section id="wpst_comments" class="wpst-comments">

    <?php
    if (post_password_required()) {
        ?>
        <div class="wpst-comments__password-form">
            <?php do_action('wpst.comments_password_form') ?>
        </div>
        <?php
    }

    if (!comments_open()) {
        do_action('wpst.comments_closed');
    }

    if (comments_open() && !have_comments()) {
        do_action('wpst.no_comments');
    }

    do_action('wpst.before_comments_list');

    if (have_comments() && !post_password_required()) {
        ?>
        <ol class="wpst-comments__list">
            <?php do_action('wpst.comments_list') ?>
        </ol>
        <?php
    }

    do_action('wpst.after_comments_list');
    ?>

</section>
