<?php
declare(strict_types=1);

$sidebar = 'unprefix-sidebar-default';

if (is_active_sidebar($sidebar)) :
    do_action('wpst.before_sidebar');
    ?>
    <div class="wpst-class wpst-class--<?= esc_attr($sidebar) ?>">
        <?php dynamic_sidebar($sidebar) ?>
    </div>
    <?php
    do_action('wpst.after_sidebar');
endif;

if (!is_active_sidebar($sidebar)) :
    do_action('wpst.default_sidebar_content', $sidebar);
endif;
