<?php

$milestones = get_field('milestone');
?>

<div class="milestone-list">
<?php foreach ($milestones as $item) { ?>
    <div class="milestone cf <?php echo $item->post_excerpt ?>">
        <div class="content">
            <span class="date">
                <?php
                if (date('Y') == get_the_date('Y', $item->ID)) {
                    echo get_the_date('F', $item->ID);
                } else {
                    echo get_the_date('F Y', $item->ID);
                }?>
            </span>
            <div class="title"><?php echo $item->post_title ?></div>
        </div>
    </div>
<!--    var_dump($item);-->
<!--    var_dump($item->ID);-->
<!--    var_dump($item->post_date);-->
<!--    var_dump($item->post_title);-->
<!--    var_dump($item->post_content);-->
<!--    var_dump($item->post_excerpt);-->
<!--    minor major -->
<?php }
?>
</div>