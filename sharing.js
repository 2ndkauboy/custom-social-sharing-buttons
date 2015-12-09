jQuery( document ).ready( function ( $ ) {
	// popup function for social bookmarks
	$( '.sharing-links a.popup' ).click( function() {

		var width = $( this ).data( 'width' ),
			height = $( this ).data( 'height' ),
			service = $( this ).data( 'service' );

		var popup = window.open( $( this ).attr( 'href' ), service, 'toolbar=0,status=0,width=' + width + ',height=' + height );
		popup.focus();
		return false;
	} );

	var has_touch = ( 'ontouchstart' in window );

	if ( has_touch ) {
		$( '.whatsapp' ).show();
	}
} );
