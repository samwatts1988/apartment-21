<?php

/**
 * Template Name: Enquire
 */

get_header(); ?>
	
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<article class="frame bg:light-tint">
			<?php the_content(); ?>
		</article>

	<?php endwhile; endif; ?>

<?php get_footer();