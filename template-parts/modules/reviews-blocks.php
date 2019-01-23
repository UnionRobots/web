<?php

wp_reset_postdata();
wp_reset_query();
$posts = get_field('reviews');

if (have_rows('reviews')) { ?>
    <?php while (have_rows('reviews')) {
        the_row();
        if (get_row_layout() == 'reviews_items') {
            $slide = get_sub_field('reviews_items_item');
            foreach ($slide as $item) {
                $content = $item->post_content;
                $content = apply_filters('acf_the_content', $content);
                ?>
                <div class="col-md-4">
                    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($item->ID); ?>" alt="">
                    <? echo $content; ?>
                    <span class="h5 light-weight">
                        <?php echo $item->post_title; ?>
                    </span><br>
                    <span class="light-weight">
                        <?php echo $item->post_excerpt; ?>
                    </span>
                </div>
            <? }
        }
    }
} ?>