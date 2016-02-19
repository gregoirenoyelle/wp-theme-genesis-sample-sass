<?php
// function sup


///////////////////////
// ENQUEUE SCRIPT CSS
///////////////////////

// ENQUEUE JS
///////////////////////
function gn_enqueue_js() {
	wp_register_script( 'vft-js', get_stylesheet_directory_uri() . '/lib-gn/js/scripts-vft.js', array('jquery'), '1.0', true );

	if ( !is_admin() ) {
		wp_enqueue_script( 'vft-js' );
	}
}
// add_action( 'wp_enqueue_scripts', 'gn_enqueue_js' );

///////////////////////
// EDITOR STYLE
///////////////////////

function gn_ajouter_styles_editeur() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'init', 'gn_ajouter_styles_editeur' );
