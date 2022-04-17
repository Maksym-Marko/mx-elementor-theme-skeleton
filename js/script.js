jQuery( document ).ready( function( $ ) {

	// owl carousel
	if( $( '.owl-carousel' ).length !== 0 ) {

		$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:true,
		    responsive:{
		        0:{
		            items:1
		        }
		    }
		})
	}
	
} )