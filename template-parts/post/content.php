
<?php if (is_single()) { ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
        if (is_sticky() && is_home()) :
            echo union_get_svg(array('icon' => 'thumb-tack'));
        endif;
        ?>
        <header class="entry-header">
            <?php $tags= get_the_tags(); ?>
            <p class="lead">
                <?php echo tag_badge($tags); ?>
                <span class="text-light">
                <?php the_date('F d, Y'); ?>
            </span>
            </p>
            <?php
            if ('post' === get_post_type()) :
                echo '<div class="entry-meta">';
//                union_posted_on();
                echo '</div>';
            endif;

            the_title('<h1 class="blog-title">', '</h1>');
            ?>
        </header>

        <?php if ('' !== get_the_post_thumbnail() && !is_single()) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('union-featured-image'); ?>
                </a>
            </div>
        <?php endif; ?>

        <div class="blog-content">
            <?php
            the_content('...');
//            wp_link_pages(array(
//                'before' => '<div class="page-links">' . __('Pages:', 'union'),
//                'after' => '</div>',
//                'link_before' => '<span class="page-number">',
//                'link_after' => '</span>',
//            ));
            ?>
        </div>
<!--        --><?php //union_entry_footer(); ?>
    </article>
<?php } else { ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
        if (is_sticky() && is_home()) :
            echo union_get_svg(array('icon' => 'thumb-tack'));
        endif;
        ?>
        <header class="entry-header">
            <?php $tags= get_the_tags(); ?>
            <p class="lead">
                <?php echo tag_badge($tags); ?>
                <span class="text-light">
                <?php the_date('F d, Y'); ?>
            </span>
            </p>
            <?php
            if ('post' === get_post_type()) :
                echo '<div class="entry-meta">';
                echo '</div><!-- .entry-meta -->';
            endif;

            the_title('<h2 class="entry-title blog-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');

            ?>
        </header>

        <?php if ('' !== get_the_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('union-featured-image'); ?>
                </a>
            </div>
        <?php endif; ?>
        <div class="blog-content">
            <?php
            if (has_excerpt(get_the_ID())) {
                the_excerpt();
            }
            else {
                the_content('...');
            }

            wp_link_pages(array(
                'before' => '<div class="page-links">' . __('Pages:', 'union'),
                'after' => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after' => '</span>',
            ));
            ?>
        </div>
    </article>
<? } ?>

