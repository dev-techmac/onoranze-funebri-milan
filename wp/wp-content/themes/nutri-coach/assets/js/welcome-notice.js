/* global nutri_coach_welcome_notice_params, jQuery */
( function ( $ ) {
	'use strict';

	var params = nutri_coach_welcome_notice_params;

	// Dismiss notice.
	$( document ).on( 'click', '.nutri-coach-welcome-notice .notice-dismiss', function () {
		$.post( params.ajaxUrl, {
			action: 'nutri_coach_dismiss_welcome_notice',
			nonce:  params.nonce,
		} );
		$( '.nutri-coach-welcome-notice' ).fadeOut( 200 );
	} );

	// Install / Activate AllCoach.
	$( '#nutri-coach-install-allcoach' ).on( 'click', function () {
		var $btn  = $( this );
		var $icon = $btn.find( '.dashicons' );
		var $text = $btn.find( '.text' );

		$btn.prop( 'disabled', true );
		$icon.removeClass( 'hidden' );

		if ( 'installed' === params.allcoachStatus ) {
			$text.text( params.activating );
			window.location.href = params.allcoachActivationUrl;
		} else {
			$text.text( params.installing );
			window.location.href = params.allcoachInstallUrl;
		}
	} );

} )( jQuery );
