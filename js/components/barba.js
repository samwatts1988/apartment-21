// (($) => {

// 	barba.init({
// 	  transitions: [{
// 	  	sync: true,
// 	    name: 'default-transition',
// 	    beforeLeave(data) {
// 	    	var done = this.async();

// 			setTimeout(() => {
// 				done();
// 			}, 300);
// 	    },
// 	    leave(data) {

// 	    	var done = this.async();

//   			setTimeout( function() {
//   				done();
//   			}, 800);
			
// 	    },
// 	    afterLeave(data) {
// 			var nextHtml = data.next.html;
// 		  	var response = nextHtml.replace(/(<\/?)body( .+?)?>/gi, '$1notbody$2>', nextHtml)
// 		  	var bodyClasses = $(response).filter('notbody').attr('class');
// 		  	$("body").attr("class", bodyClasses);
// 	    },
// 	    beforeEnter(data) {

// 	    },
// 	    enter(data) {

// 	    	var done = this.async();

// 			setTimeout( function() {
// 	  			$( '[data-barba="container"]' ).addClass( 'fade-out' );
// 			}, 250);
			
// 			done();	

// 	    },
// 	    after(data) {

// 	    	var done = this.async();

// 			setTimeout( function() {
// 	  			$( '[data-barba="container"]' ).removeClass( 'fade-out' );
// 			}, 250);
			
// 			done();	

// 	    }
// 	  }]
// 	});


// })( jQuery );