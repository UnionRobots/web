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
<?php
$title = '';
if(get_locale()=='ru_RU'):
    $title = '404 - Ой, страница не найдена';
    $descr = 'на '.'<a class="text-light" href="'. home_url().'">Главную</a>';
elseif(get_locale()=='en_EN'):
	$title = '404 - Oops! Page not found!';
	$descr = ' '.'<a class="text-light" href="'. home_url().'">Home page</a>';
endif;
?>
<header class="mini-header mini-header--bg">
    <img class="oval-TopL" src="<?php echo get_template_directory_uri()?>/images/Oval3-top-left.svg" alt="">
    <img class="oval-TopL" src="<?php echo get_template_directory_uri()?>/images/Oval2-top-left.svg" alt="">
    <img class="oval-TopL" src="<?php echo get_template_directory_uri()?>/images/Oval-top-left.svg" alt="">

    <img class="oval-BottomR" src="<?php echo get_template_directory_uri()?>/images/Oval3-bottom-right.svg" alt="">
    <img class="oval-BottomR" src="<?php echo get_template_directory_uri()?>/images/Oval2-bottom-right.svg" alt="">
    <img class="oval-BottomR" src="<?php echo get_template_directory_uri()?>/images/Oval-bottom-right.svg" alt="">

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
            <div class="col-md-8">
                <article>
                    <h1 class="text-white font-weight-bold mt-13">
                        <?php echo $title ?>
                    </h1>
                    <div class="text-white mt-3 mb-4">
                        <?php echo $descr ?>
                    </div>

                    <?php the_field('block_button') ?>

                    <ul class="list-inline social mt-4">
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