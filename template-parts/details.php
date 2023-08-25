<header class="details">
	<nav class="flex spacious">
		<ul>
			<li><a class="site-logo" href="<?php echo bloginfo( 'url' ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="<?php echo bloginfo( 'title' ); ?>"></a></li>
			<li><a class="navigator" href="<?php echo get_the_permalink( 9 ); ?>"><?php echo get_the_title( 9 ); ?></a></li>		
		</ul>
	</nav>

	<?php if( get_field( 'address', 'option' ) ) : ?>
		<address>
			<p><?php echo get_field( 'address', 'option' ); ?></p>
		</address>
	<?php endif; ?>
</header>
