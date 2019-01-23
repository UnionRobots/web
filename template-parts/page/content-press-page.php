<?php
$uri = end(explode("/", get_page_uri()));
$form_is = false;
$args = array(
    'post_type'      => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 0,
    'ignore_sticky_posts' => true,
    'no_found_rows'       => true,
);
switch ($uri) {
    case "pressa":
        $args['tax_query'] = array( array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array('post-format-standard'),
            'operator' => 'NOT EXISTS'
        ) );
        $form_is = true;
        break;
    case "novosti":
        $args['tax_query'] = array( array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array('post-format-link'),
            'operator' => 'IN'
        ) );
        break;
    case "izobrazheniya":
        $args['tax_query'] = array( array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array('post-format-image'),
            'operator' => 'IN'
        ) );
        break;
    case "video":
        $args['tax_query'] = array( array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array('post-format-video'),
            'operator' => 'IN'
        ) );
        break;
}
?>
<?php
if ($form_is) {
?>
<div class="container-fluid bg-gray padding4040">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <?php
                    get_template_part( 'template-parts/modules/social', 'subscribe-text' );
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <form class="form-horizontal">

                    <div class="form-group"> <!-- Full Name -->
                        <div class="col-sm-9">
                            <label class="w100">
                                <input type="text" class="form-control" name="full_name" placeholder="Имя*">
                            </label>
                        </div>
                    </div>
                    <div class="form-group"> <!-- Full Name -->
                        <div class="col-sm-9">
                            <label class="w100">
                                <input type="email" class="form-control" name="email" placeholder="Email*">
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <button type="button" class="btn btn-black">Подписаться!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php
$query = new WP_Query( $args ); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    get_template_part( 'template-parts/post/content', get_post_format() );
                }
                the_posts_pagination( array(
                    'prev_text' => union_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'union' ) . '</span>',
                    'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'union' ) . '</span>' . union_get_svg( array( 'icon' => 'arrow-right' ) ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'union' ) . ' </span>',
                ) );
                wp_reset_postdata();
            } else {
                get_template_part( 'template-parts/post/content', 'none' );
            }
            ?>
            </div>
        </div>
    </div>
</div>
