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

<header class="header-promo--bg">
    <div class="header-promo--cover">

    </div>
    <nav class="pt-4" style="position: relative; margin-bottom: -50px">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-lg-left text-sm-center col-sm-12">
                    <a class="navbar-brand logo" href="<?php echo home_url() ?>/promo/">
                        <img src="<?php echo get_template_directory_uri() ?>/images/logo-UR.svg" alt="">
                    </a>
                </div>
                <div class="col-md-4 text-lg-right text-sm-center col-sm-12">
                    <p class="h2 mt-2"><a href="tel:+74951182542" style="color: white">+7 495 118-25-42</a></p>
                </div>
            </div>
        </div>

    </nav>
    <div class="container v-100">
        <div class="row v-100 d-flex align-items-center bd-highlight">
            <div class="col-md-12 ">
                <article>
                    <h1 class="text-center display-3 text-white font-weight-bold">
                        <?php the_title(); ?>
                    </h1>
                    <p class="lead text-white mb-8">
	                    <?php echo get_field('small_caption', get_the_ID(), false) ?>
                    </p>
                    <?php the_field('block_button') ?>

                    <ul class="list-inline social mt-3">
                        <li class="list-inline-item ml-2">
                            <a href="https://vk.com/unionrobots" target="_blank">
                                <i class="fab fa-vk"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/unionrobots/" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/unionrobots" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/unionrobots/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </article>
            </div>
        </div>
    </div>
</header>