<?php
/*
Plugin Name: Курс валюты
Version: 1.0.0
Author: @KIR-Development
License: GPLv2 or later
Text Domain: currency
*/



// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	exit;
}

add_action( 'site_header', 'course_currency', 10);
 
function course_currency() {
	?>
	<div class="container">
		<div class="row">
			<div class="currency d-flex flex-column justify-content-center">
				<h3 class="currency-title">Курс валют</h3>
				<p class="currency-title"><i class="fa fa-eur"></i><span id="EUR"></span> руб.</p>
				<p class="currency-title"><i class="fa fa-usd"></i><span id="USD"></span> руб.</p>
			</div>
		</div>
	</div>			
	<?php
}



// Enqueue Scripts and Styles
function loadMyScript() {

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('jquery');
	wp_register_script( 'currency-js', plugins_url('currency/js/script.js'), array('jquery'), '1.0', true);
	wp_enqueue_script( 'currency-js' );
	
}

add_action( 'wp_enqueue_scripts', 'loadMyScript' );
