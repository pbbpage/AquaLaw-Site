<?php add_action( 'widgets_init', 'AquaLaw_recent_posts_widget');

function AquaLaw_recent_posts_widget(){
	register_widget( 'AquaLaw_recent_posts_widget' );
}
class AquaLaw_recent_posts_widget extends WP_Widget {
	function Webadelic_Recent_Blog_Widget() {
	
		// Widget setup
		$widget_ops = array( 'classname' => 'AquaLaw_recent_posts_widget', 'description' => __('Widget that show excerpt along with recent post widget', 'framework') );

		// Widget UI
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'webadelic_recent_blog_widget' );

		// Widget name and description
		$this->WP_Widget( 'webadelic_recent_blog_widget', __('Webadelic - Recent Posts Widget', 'framework'), $widget_ops, $control_ops );
	}

}
?>