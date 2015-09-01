<?php 
// Remove admin bar for all users
show_admin_bar( false );

// Move ACF Options menu under Settings
//if( function_exists('acf_add_options_sub_page') )
//{
//    acf_add_options_sub_page(array(
//        'title' => __( 'Site Options', 'themeTextDomain' ),
//        'parent' => 'options-general.php',
//        'capability' => 'manage_options'
//    ));
//}

// Add TinyMCE buttons that are disabled by default
//function themeFunction_mce_buttons_2($buttons) {	
//	/**
//	 * Add in a core button that's disabled by default
//	 */
//	$buttons[] = 'justify'; // fully justify text
//	$buttons[] = 'hr'; // insert HR
//
//	return $buttons;
//}
//add_filter('mce_buttons_2', 'themeFunction_mce_buttons_2');


// Remove all colors except those custom colors specified from TinyMCE
//function themeFunction_change_mce_options( $init ) {
//	$custom_colors = '"#####1", "Color Name 1", "#####2", "Color Name 2", "#####3", "Color Name 3"';	
//	$init['textcolor_map'] = '['.$custom_colors.']';
//return $init;
//}
//add_filter('tiny_mce_before_init', 'themeFunction_change_mce_options');


// Modify the query on a given template (using conditionals)
//function themeFunction_custom_query($query) {
//    if ($query->is_search) {
//        $query->set('post_type', 'post');
//    }
//    return $query;
//}
//add_filter('pre_get_posts','themeFunction_custom_query');

// ADD Google Fonts Support
//function child_load_google_fonts() {
//  	
  	// Setup font arguments
//	$query_args = array(
//		'family' => 'Open+Sans:300,400,700' // Change this font to whatever font you'd like
//	);
 
 	// A safe way to register a CSS style file for later use
//	wp_register_style( 'google-fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
	
	// A safe way to add/enqueue a CSS style file to a WordPress generated page
//	wp_enqueue_style( 'google-fonts' );
//}

// Add Typekit Support
//function theme_typekit() {
//    wp_enqueue_script( 'theme_typekit', '//use.typekit.net/xxxxxxx.js');
//}

//function theme_typekit_inline() {
/*  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
  	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php }
*/
?>
