<?php

/**
 * Template Name: About
 */

get_header(); ?>
	
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<article class="frame about text-content">
			<?php the_content(); ?>

			<p><a href="<?php echo bloginfo( 'url' ); ?>">Close</a></p>
		</article>

	<?php endwhile; endif; ?>

<?php get_footer();