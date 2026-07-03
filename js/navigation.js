/**
 * Evoke by Ayush - Navigation
 * Handles the mobile menu toggle behaviour.
 *
 * @package Evoke_By_Ayush
 */
( function () {
	'use strict';

	var toggle = document.querySelector( '.evk-menu-toggle' );
	var nav = document.querySelector( '.evk-main-nav' );

	if ( ! toggle || ! nav ) {
		return;
	}

	toggle.addEventListener( 'click', function () {
		var isActive = nav.classList.toggle( 'is-active' );
		toggle.setAttribute( 'aria-expanded', isActive ? 'true' : 'false' );
	} );

	// Close menu when a link is clicked (mobile).
	nav.querySelectorAll( 'a' ).forEach( function ( link ) {
		link.addEventListener( 'click', function () {
			if ( window.innerWidth <= 782 ) {
				nav.classList.remove( 'is-active' );
				toggle.setAttribute( 'aria-expanded', 'false' );
			}
		} );
	} );

	// Close menu on outside click.
	document.addEventListener( 'click', function ( e ) {
		if ( ! nav.contains( e.target ) && ! toggle.contains( e.target ) ) {
			nav.classList.remove( 'is-active' );
			toggle.setAttribute( 'aria-expanded', 'false' );
		}
	} );
} )();
