
<?php
if (!is_single()) :
    wp_nav_menu(array(
        'theme_location' => 'top',
        'menu_id' => 'top-menu',
        'menu_class' => 'navbar-nav ml-auto',
        'container' => 'ul',
        'fallback_cb' => 'bs4navwalker::fallback',
        'walker' => new bs4navwalker()
    ));
else :
    wp_nav_menu(array(
        'theme_location' => 'top',
        'menu_id' => 'top-menu',
        'menu_class' => 'navbar-nav ml-auto',
        'container' => 'ul',
        'walker' => new bs4navwalker()
    ));
endif;
?>
<?php if (is_single()) : ?>
<?php endif; ?>