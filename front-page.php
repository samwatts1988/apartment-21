<?php get_header(); ?>

<?php $vimeo = get_field( 'vimeo_url' ); ?>

	<article class="frame fade-out">
		<h1 class="screen-reader-text"><?php echo get_the_title(); ?></h1>
		<figure>
			<div class="vimeo-wrapper">
				<iframe title="Apartment 21 Showreel" src="<?php echo $vimeo; ?>" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>		
				<script src="https://player.vimeo.com/api/player.js"></script>
			</div>
		</figure>

		<ul>
			<?php while( have_rows( 'services' ) ) : the_row(); ?>
				<li><?php echo get_sub_field( 'service' ); ?></li>
			<?php endwhile; ?>
		</ul>
	</article>

<?php get_footer(); ?>