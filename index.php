<?php
if (is_front_page()) {
	get_header();
}
else {
	get_header('page');
}
?>
<section class="mini_ovals content-page">
    <div class="container mt-8 mb-8">
        <div class="row">
            <div class="col-md-12">
				<?php
				the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php  if (get_field('form_block') ):?>
<section id="form" class="form-block pt-8 pb-8">
	<div class="container">
		<div class="row">
			<?php the_field('form_block') ?>
		</div>
	</div>
</section>
<?php  endif; ?>
<?php  if (get_field('contacts_block') ):?>
<section class="mt-6 mb-6 pt-4 pb-4">
    <div class="container">
        <div class="row">
	        <?php the_field('contacts_block') ?>
        </div>
    </div>
</section>
<?php  endif; ?>
<?php
get_footer(); ?>
