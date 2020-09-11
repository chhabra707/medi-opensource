<?php

/*
	
@package sunsettheme
	
	========================
		SHORTCODE OPTIONS
	========================
*/
function sunset_tooltip( $atts, $content = null ) {
	
	//[tooltip placement="top" title="This is the title"]This is the content[/tooltip]
	
	//get the attributes
	$atts = shortcode_atts(
		array(
			'placement' => 'top',
			'title' => '',
		),
		$atts,
		'tooltip'
	);
	
	$title = ( $atts['title'] == '' ? $content : $atts['title'] );
	
	//return HTML
	return '<span class="sunset-tooltip" data-toggle="tooltip" data-placement="' . $atts['placement'] . '" title="' . $title . '">' . $content . '</span>';
	
}

add_shortcode( 'tooltip', 'sunset_tooltip' );


function sunset_popover( $atts, $content = null ) {
	
	//[popover title="Popover title" placement="top" trigger="click" content="This is the Popover content"]This is the clickable content[/popover]
	
	//get the attributes
	$atts = shortcode_atts(
		array(
			'placement' => 'top',
			'title' => '',
			'trigger' => 'click',
			'content' => '',
		),
		$atts,
		'popover'
	);
	
	//return HTML
	return '<span class="sunset-popover" data-toggle="popover" data-placement="' . $atts['placement'] . '" title="' . $atts['title'] . '" data-trigger="' . $atts['trigger'] . '" data-content="' . $atts['content'] . '">' . $content . '</span>';
		
}

add_shortcode( 'popover', 'sunset_popover' );

// Contact Form shortcode
function sunset_contact_form( $atts, $content = null ) {
	
	//[contact_form]
	
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'contact_form'
	);
	
	//return HTML
	ob_start();
	include 'templates/contact-form.php';
	return ob_get_clean();
	
}
add_shortcode( 'contact_form', 'sunset_contact_form' );


// Home shortcode
function brandh_home_page( $atts, $content = null ) {
	
	//[home_page]
	
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'home_page'
	);
	
	//return HTML
	ob_start();
	include 'templates/first-page.php';
	return ob_get_clean();
	
}
add_shortcode( 'home_page', 'brandh_home_page' );


// How-to-use shortcode
function brandh_how_to_use( $atts, $content = null ) {
	
	//[how_to_use]
	
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'how_to_use'
	);
	
	//return HTML
	ob_start();
	include 'templates/how-to-use.php';
	return ob_get_clean();
	
}
add_shortcode( 'how_to_use', 'brandh_how_to_use' );


// Affiliate shortcode
function brandh_affiliate_hospital( $atts, $content = null ) {
	
	//[affiliate_hospital]
	
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'affiliate_hospital'
	);
	
	//return HTML
	ob_start();
	include 'templates/affiliate.php';
	return ob_get_clean();
	
}
add_shortcode( 'affiliate_hospital', 'brandh_affiliate_hospital' );


// case_interview shortcode
function brandh_case_interview( $atts, $content = null ) {
	
	//[case_interview]
	
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'case_interview'
	);
	
	//return HTML
	ob_start();
	include 'templates/interview.php';
	return ob_get_clean();
	
}
add_shortcode( 'case_interview', 'brandh_case_interview' );


// success_cases shortcode
function brandh_success_cases( $atts, $content = null ) {
	
	//[success_cases]
	
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'success_cases'
	);
	
	//return HTML
	ob_start();
	include 'templates/success_cases.php';
	return ob_get_clean();
	
}
add_shortcode( 'success_cases', 'brandh_success_cases' );


// inquiry_form shortcode
function brandh_inquiry( $atts, $content = null ) {
	
	//[inquiry_form]
	
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'inquiry_form'
	);
	
	//return HTML
	ob_start();
	include 'templates/inquiry.php';
	return ob_get_clean();
	
}
add_shortcode( 'inquiry_form', 'brandh_inquiry' );


// about_us shortcode
function brandh_about_us( $atts, $content = null ) {
	
	//[about_us]
	
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'about_us'
	);
	
	//return HTML
	ob_start();
	include 'templates/about-us.php';
	return ob_get_clean();
	
}
add_shortcode( 'about_us', 'brandh_about_us' );






































