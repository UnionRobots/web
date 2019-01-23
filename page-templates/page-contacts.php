<?php

/*
Template Name: Contacts
*/
get_header('mini'); ?>
<section class="mt-6 mb-6 pt-4 pb-4">
    <div class="container">
        <div class="row">
			<?php the_field('contacts_block') ?>
        </div>
    </div>
</section>
<section class="form-block--nobg pt-8 pb-8">
    <div class="container">
        <div class="row">
			<?php the_field('form_block') ?>
        </div>
    </div>
</section>
<?php
get_footer(); ?>