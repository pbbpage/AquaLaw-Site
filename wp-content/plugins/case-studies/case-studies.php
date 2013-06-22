<?php
/*
Plugin Name: Case Study
Plugin URI: http://pagebowersdesigns.com/
Description: Custom post type for employee information
Version: 1.0
Author: Page Bowers
Author URI: http://pagebowersdesigns.com/
*/

add_action( 'init', 'create_case_study_post_type' );
?>
<?php
	function create_case_study_post_type() {
		register_post_type( 'case_study',
			array (
				'labels' => array(
					'name' => __('Case Study' ),
					'singular_name' => 'Case Study',
	                'add_new' => 'Add New',
	                'add_new_item' => 'Add New Case Study',
	                'edit' => 'Edit',
	                'edit_item' => 'Edit Case Study',
	                'new_item' => 'New Case Study',
	                'view' => 'View',
	                'view_item' => 'View Case Study',
	                'search_items' => 'Search Employees',
	                'not_found' => 'No Case Reviews found',
	                'not_found_in_trash' => 'No Case information found in Trash',
	                'parent' => 'Parent Case Study',
	                
				),
				
				'public' => true,
				'supports' => array( 'title', 'editor', 'thumbnail'),
				'taxonomies' => array(''),
				'has_archive' => true,
			)
		);
	}
add_filter( 'enter_title_here', 'custom_case_enter_title' );

function custom_case_enter_title( $input ) {
    global $post_type;

    if ( is_admin() && 'case_study' == $post_type )
        return __( 'Enter case Name', 'your_textdomain' );

    return $input;
}

add_filter( 'template_include', 'include_case_template_function', 1 );
function include_case_template_function( $template_path ) {
    if ( get_post_type() == 'case_study' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-case_study.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/case-studies.php';
            }
        }
    }
    return $template_path;
}

?>