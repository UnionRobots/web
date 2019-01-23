<?php

/*
Template Name: Home
*/
get_header('page');

$class_ovals = 'mini_ovals2';
if (strpos(get_permalink(), 'company') !== false) {
	$class_ovals = '';
}
?>
<section class="<?php echo $class_ovals ?> content-page">
    <div class="container">
	    <?php
	    the_content(); ?>
    </div>
</section>
<?php
get_footer('page'); ?>
