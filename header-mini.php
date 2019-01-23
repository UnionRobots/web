<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="bg-red h-auto">
    <nav class="navbar navbar-light justify-content-between navbar-expand-lg pt-4">
        <div class="container">
            <a class="navbar-brand logo" href="<?php echo home_url() ?>">
                <img src="<?php echo get_template_directory_uri() ?>/images/logo-UR.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
				<?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
            </div>
        </div>
    </nav>
    <img class="maskTop" src="<?php echo get_template_directory_uri()?>/images/maskBG.svg" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pt-4 pb-8">
                <article>
                    <h1 class="text-white font-weight-normal display-3">
						<?php the_title(); ?>
                    </h1>
                    <div class="text-white mt-3 mb-4">
						<?php echo get_field('small_caption') ?>
                    </div>

					<?php the_field('block_button') ?>


                </article>
            </div>
        </div>
    </div>
</header>