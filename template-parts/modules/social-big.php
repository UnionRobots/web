<div class="container bottomMarginNormal">
    <div class="row">
        <div class="col-md-12 text-center">
            <?php
            $title = get_field('title_social');
            echo $title;
            ?>

            <?php
            if (has_nav_menu('social')) : ?>
                <nav class="social-navigation " role="navigation"
                     aria-label="<?php _e('Footer Social Links Menu', 'union'); ?>">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'social',
                        'items_wrap' => '%3$s',
                        'menu_class' => 'nav',
                        'depth' => 1,
                        'walker' => new WPDocs_Walker_Nav_Menu_Links()
                    ));
                    ?>
                </nav>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="row">
    <?php
    echo do_shortcode('[instagram-feed num=4 cols=4]');
    ?>
</div>
