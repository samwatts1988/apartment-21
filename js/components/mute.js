(() => {

	const toggle = document.querySelector( '.volume-toggle' );
	const video = document.getElementById('video');
	const player = new Vimeo.Player(video);

	player.setVolume(0);
	toggle.addEventListener( 'click', (e) => {
		e.preventDefault();

		player.getVolume().then(function(volume) {
			if( volume === 0 ) {
				player.setVolume(1);
				toggle.innerHTML = '';
				toggle.innerHTML = 'mute';
			} else {
				player.setVolume(0);
				toggle.innerHTML = '';
				toggle.innerHTML = 'unmute';
			}
		});
	});

})();