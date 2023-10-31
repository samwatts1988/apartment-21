<header class="details">
	<nav class="flex spacious">
		<ul>
			<li><a class="site-logo" href="<?php echo bloginfo( 'url' ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="<?php echo bloginfo( 'title' ); ?>"></a></li>
			<li>
				<address>
					<p><?php echo get_field( 'address', 'option' ); ?></p>
				</address>
			</li>
		</ul>
	</nav>
	<nav>
		<?php

		wp_nav_menu([
			'theme_location' => 'header',
			'items_wrap'     => '<ul class="flex">%3$s</ul>',
			'fallback_cb'    => '',
			'container'      => '',
		]);

		?>
	</nav>
</header>
