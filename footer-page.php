
<?php wp_footer(); ?>

<footer class="pt-5 ">
    <img class="oval-BottomL" src="<?php echo get_template_directory_uri()?>/images/Oval3-bottom-left.svg" alt="">
    <img class="oval-BottomL" src="<?php echo get_template_directory_uri()?>/images/Oval2-bottom-left.svg" alt="">
    <img class="oval-BottomL" src="<?php echo get_template_directory_uri()?>/images/Oval-bottom-left.svg" alt="">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-4">
	            <?php wp_nav_menu(array(
                    'menu' => 'footer 1',
		            'menu_class' => 'footer-menu',
		            'container' => 'ul'
	            )); ?>
            </div>
            <div class="col-md-4">
	            <?php wp_nav_menu(array(
		            'menu' => 'footer 2',
		            'menu_class' => 'footer-menu',
		            'container' => 'ul'
	            )); ?>
            </div>
            <div class="col-md-4">
	            <?php wp_nav_menu(array(
		            'menu' => 'footer 3',
		            'menu_class' => 'footer-menu',
		            'container' => 'ul'
	            )); ?>
                <div class="mt-6 mb-6">
<!--                    <a class="lead tel-footer" href="tel:+7 495 228-04-32">+7 495 118-25-42</a>-->
<!--                    <p class="lead">Телефон в Москве</p>-->
                </div>
                <ul class="list-inline social social-footer">
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
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center copyright mt-4 mb-4">
                <a class="navbar-brand logo mb-4" href="<?php echo home_url() ?>/promo/">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo-UR.svg" alt="">
                </a>
                <?php if (is_active_sidebar('footer_1')) {
	                dynamic_sidebar('footer_1');
                } ?>
            </div>
        </div>
    </div>
</footer>
</body>
</html>