<?php get_header(); ?>

	<article class="frame">
		<h1 class="screen-reader-text"><?php echo get_the_title(); ?></h1>

		<figure>
			<img src="<?php echo get_stylesheet_directory_uri() ;?>/images/apartment-21-placeholder.jpg" alt="<?php echo bloginfo( 'title' ); ?>">
		</figure>

		<ul>
			<?php while( have_rows( 'services' ) ) : the_row(); ?>
				<li><?php echo get_sub_field( 'service' ); ?></li>
			<?php endwhile; ?>
		</ul>
	</article>

<?php get_footer(); ?>