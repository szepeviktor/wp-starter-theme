<?php
declare(strict_types=1);
?>
<!DOCTYPE html>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

<?php do_action('wpst.before_header') ?>

    <header id="wpst_header" class="wpst-header">
        <?php do_action('wpst.header_content') ?>
    </header>

<?php
do_action('wpst.after_header');
