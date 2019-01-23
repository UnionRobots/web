<?php

/*
Template Name: Business
*/
get_header('mini');

$class_ovals = 'mini_ovals2';
if (strpos(get_permalink(), 'company') !== false) {
	$class_ovals = '';
}
?>
<section class="<?php echo $class_ovals ?> content-page">
    <?php
    the_content(); ?>
</section>
<?php
get_footer(); ?>
