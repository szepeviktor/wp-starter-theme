<?php
declare(strict_types=1);

// TODO Check sanitization over the post classes

do_action('wpst.before_article');
?>
    <article id="post-<?= esc_attr(get_the_ID()) ?>" <?php post_class('wpst-article') ?>>

        <?php do_action('wpst.before_article_header') ?>

        <header class="wpst-article__header">
            <?php do_action('wpst.article_header') ?>
        </header>

        <?php
        do_action('wpst.before_article_content');

        if (get_the_content()) {
            ?>
            <div class="wpst-article__contenst">
                <?php do_action('wpst.article_content') ?>
            </div>
            <?php
        }

        do_action('wpst.after_article_content');
        ?>

    </article>
<?php
do_action('wpst.after_article');
