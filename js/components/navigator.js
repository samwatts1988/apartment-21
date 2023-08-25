(($) => {

	let $navigator = $( '.navigator' );

	$navigator.on( 'click', (e) => {
		e.preventDefault();

		$( '.frame' ).addClass( 'fade-out' );

		setTimeout(() => {
			window.location.href = e.target.href;
		}, 500);

	});

})( jQuery );