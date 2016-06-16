//This is where you will make the customizer dynamic. In the wp.customize function, change the setting id to the one you wish to make dynamic. Then inside the function you can change anything to the 'to' variable that will change anytime you edit a control in the customizer. In the example below, you are changing the background image css but this could just as easily be changed to - jQuery( 'CLASS OR ID TO BE CHANGED' ).html( to ) - to change the text within that html tag. 

/*
	wp.customize( 'pwd_SETTINGS_ID', function( value ) {
		value.bind( function( to ) {
			jQuery( 'CLASS OR ID TO BE CHANGED' ).css( 'background-image', 'url( ' + to + ')' );
		} );
	});

*/
(function( $ ) {
	"use strict";

	// Landing Area - Featured Image
	wp.customize( 'pwd_featured_image', function( value ) {
		value.bind( function( to ) {
			jQuery( '.featured' ).css( 'background-image', 'url( ' + to + ')' );
		} );
	});


})( jQuery );