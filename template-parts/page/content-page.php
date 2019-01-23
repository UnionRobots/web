
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--	<header class="entry-header">-->
<!--		--><?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<!--		--><?php //union_edit_link( get_the_ID() ); ?>
<!--	</header>
	<div class="page-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'union' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>
