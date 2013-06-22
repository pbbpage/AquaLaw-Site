<?php
/*
Plugin Name: Employee About Page
Plugin URI: http://pagebowersdesigns.com/
Description: Custom post type for employee information
Version: 1.0
Author: Page Bowers
Author URI: http://pagebowersdesigns.com/
*/

add_action( 'init', 'create_post_type' );
?>
<?php
	function create_post_type() {
		register_post_type( 'aqualaw_employees',
			array (
				'labels' => array(
					'name' => __('Employees' ),
					'singular_name' => 'Employee Profile',
	                'add_new' => 'Add New',
	                'add_new_item' => 'Add New Employee Profile',
	                'edit' => 'Edit',
	                'edit_item' => 'Edit Employee profile',
	                'new_item' => 'New Employee Profile',
	                'view' => 'View',
	                'view_item' => 'View Employee Profile',
	                'search_items' => 'Search Employees',
	                'not_found' => 'No employees Reviews found',
	                'not_found_in_trash' => 'No Employee information found in Trash',
	                'parent' => 'Parent Employee Profile',
	                
				),
				
				'public' => true,
				'supports' => array( 'title', 'editor', 'thumbnail'),
				'taxonomies' => array(''),
				'has_archive' => true,
			)
		);
	}
add_filter( 'enter_title_here', 'custom_enter_title' );

function custom_enter_title( $input ) {
    global $post_type;

    if ( is_admin() && 'aqualaw_employees' == $post_type )
        return __( 'Enter employee Name', 'your_textdomain' );

    return $input;
}

add_filter( 'template_include', 'include_template_function', 1 );
function include_template_function( $template_path ) {
    if ( get_post_type() == 'aqualaw_employees' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-aqualaw_employees.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/aqualaw_employees.php';
            }
        }
    }
    return $template_path;
}

?>
