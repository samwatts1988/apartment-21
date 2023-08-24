(($) => {

	$( document ).ready(function() {

		console.log( "Design by https://acommonpurpose.co.uk" );
		console.log( "Code by https://samwatts.net" );

		$.getScript( 'https://cdnjs.cloudflare.com/ajax/libs/ajaxify/8.2.3/ajaxify.min.js', function() {
			let ajaxify = new Ajaxify({
				elements: "#content",
				selector: "a:not(.no-ajax)",
		        requestDelay: 300,
		        bodyClasses: true,
		        prefetchoff: true,
		        refresh: true,
		        forms: false,
		        prefetchoff: false,
		        inline: true,
		        inlinesync: true,
		        inlineappend: true,
		        pluginon: true  			
			});
		
			window.addEventListener( 'pronto.request', function(event) {

			});

			window.addEventListener( 'pronto.render', function(event) {

			});	

		});

	});

})( jQuery );