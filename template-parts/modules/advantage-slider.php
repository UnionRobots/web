<?php

wp_reset_postdata();
wp_reset_query();
$posts = get_field('advantages-slider');

if( have_rows('advantages-slider') ): ?>
    <div class="adv-slider-block">
        <?php while( have_rows('advantages-slider') ): the_row(); ?>
            <?php if( get_row_layout() == 'slide' ):
                $slide = get_sub_field('items');
                    foreach ($slide as $item) {
                        $content = $item->post_content;
                        $content = apply_filters( 'acf_the_content', $content );
                        ?>
                        <div>
                            <div class="row">
                                <div class="col-md-5">
                                    <img class="img-fluid paddingTopNormal" src="<?php echo get_the_post_thumbnail_url($item->ID); ?>" alt="">
                                </div>
                                <div class="col-md-7">
                                    <h2 class="h2 paddingTop60">
                                        <strong><?php echo $item->post_title; ?></strong>
                                    </h2>
                                    <? echo $content; ?>
                                </div>
                            </div>
                        </div>
                    <? } ?>
            <?php elseif(get_row_layout() == 'video_slide' ): ?>
                <?php the_sub_field('iframe'); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>
<?php endif; ?>