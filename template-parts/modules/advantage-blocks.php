<?php

wp_reset_postdata();
wp_reset_query();
$posts = get_field('advantages-blocks');

if( have_rows('advantages-blocks') ): ?>
    <?php while( have_rows('advantages-blocks') ): the_row(); ?>
        <?php if( get_row_layout() == 'slide' ):
            $slide = get_sub_field('items');
                foreach ($slide as $item) {
                    $content = $item->post_content;
                    $content = apply_filters( 'acf_the_content', $content );
                    ?>
                        <div class="col-md-4">
                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($item->ID); ?>" alt="">
                            <h2 class="h2">
                                <strong><?php echo $item->post_title; ?></strong>
                            </h2>
                            <? echo $content; ?>
                        </div>
                <? } ?>
        <?php elseif(get_row_layout() == 'video_slide' ): ?>
            <?php the_sub_field('iframe'); ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>