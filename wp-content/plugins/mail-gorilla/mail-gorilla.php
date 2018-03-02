<?php
/*
Plugin Name: Mail Gorilla
Plugin URI:
Description:  The best email collector
Version:      1.0
Author:       DaxApps
Author URI:   https://developerdax.com/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  
Domain Path:  /languages
*/

/* !0. TABLE OF CONTENTS */

/*
	
  1. HOOKS
  	1.1 - registers all our custom shortcodes
	
	2. SHORTCODES
		2.1 - mgr_register_shortcodes()
		2.2 - mgr_form_shortcode()
		
	3. FILTERS
		
	4. EXTERNAL SCRIPTS
		
	5. ACTIONS
		
	6. HELPERS
		
	7. CUSTOM POST TYPES
	
	8. ADMIN PAGES
	
	9. SETTINGS

*/

/* !1. HOOKS */

// 1.1
// hint: registers all our custom shortcodes on init
add_action('init', 'mgr_register_shortcodes');

/* !2. SHORTCODES */

// 2.1
// hint: registers all our custom shortcodes
function mgr_register_shortcodes() {
	
	add_shortcode('mgr_form', 'mgr_form_shortcode');
	
}

// 2.2
// hint: returns a html string for a email capture form
function mgr_form_shortcode( $args, $content="") {
	
	// setup our output variable - the form html 
	$output = '
	
		<div class="mgr">
		
			<form id="mgr_form" name="mgr_form" class="mgr-form" method="post">
			
				<p class="mgr-input-container">
				
					<label>Your Name</label><br />
					<input type="text" name="mgr_fname" placeholder="First Name" />
					<input type="text" name="mgr_lname" placeholder="Last Name" />
				
				</p>
				
				<p class="mgr-input-container">
				
					<label>Your Email</label><br />
					<input type="email" name="mgr_email" placeholder="ex. you@email.com" />
				
				</p>';
				
				// including content in our form html if content is passed into the function
				if( strlen($content) ):
				
					$output .= '<div class="mgr-content">'. wpautop($content) .'</div>';
				
				endif;
				
				// completing our form html
				$output .= '<p class="mgr-input-container">
				
					<input type="submit" name="mgr_submit" value="Sign Me Up!" />
				
				</p>
			
			</form>
		
		</div>
	
	';
	
	// return our results/html
	return $output;
	
}