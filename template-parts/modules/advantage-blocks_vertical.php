<?php

wp_reset_postdata();
wp_reset_query();
$posts = get_field('advantages-blocks');

if( have_rows('advantages-blocks') ): ?>
    <?php while( have_rows('advantages-blocks') ): the_row(); ?>
        <?php if( get_row_layout() == 'slide' ):
            $slide = get_sub_field('items');
            $i = 1;
                foreach ($slide as $item) {
                    $content = $item->post_content;
                    $content = apply_filters( 'acf_the_content', $content );
                    $img = get_field('pic');
                    ?>
                    <?php  if ($i == 3) { $i=4; ?>
                        <div class="container-fluid">
                            <div class="row">
                                <img src="<?php echo $img?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    <?php } ?>
                    <div class="container-fluid padding5050 <?php echo ($i % 2 == 0) ? '' : 'bg-gray' ?>">
                        <div class="container">
                            <div class="row">
                    <?php // if ($i % 2 == 0) { ?>
                                <div class="<?php echo ($i % 2 == 0) ? 'col-md-5 ' : 'col-md-5 push-md-7' ?> text-center">
                                    <img class="img-fluid w100" src="<?php echo get_the_post_thumbnail_url($item->ID); ?>" alt="">
                                </div>
                                <div class="<?php echo ($i % 2 == 0) ? 'col-md-7' : 'col-md-7 pull-md-5' ?>">
                                    <h2 class="h2">
                                        <strong><?php echo $item->post_title; ?></strong>
                                    </h2>
                                    <? echo $content; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <? $i++; } ?>
        <?php elseif(get_row_layout() == 'video_slide' ): ?>
            <?php the_sub_field('iframe'); ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>