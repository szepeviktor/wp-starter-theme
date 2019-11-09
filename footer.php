<?php
declare(strict_types=1);

do_action('wpst.before_footer');
?>

<footer id="wpst_footer">
    <?php do_action('wpst.footer_content') ?>
</footer>

<?php
do_action('wpst.after_footer');
wp_footer()
?>

</body>
</html>
