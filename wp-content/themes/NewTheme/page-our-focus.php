<?php get_header(); ?>
<div id="page-main">
<div id="sidebar">
	<h2 class="widgettitle">Core Services</h2>
	<?php
	$rows = get_field('our-focus-repeater');
	if($rows)
	{
		echo '<ul>';
		foreach($rows as $row)
		{
			$output = '<li id="our-focus"><div id="icon-wrap"><img id="icon" src="%s" alt="%s" height="70" width=auto ><div id="text-wrap"><h3>%s</h3></div></div></li>';
			echo sprintf($output, $row['our_focus_images']['url'], $row['our_focus_images']['title'], $row['our_focus_images']['title']);
		}
	}
	?>
</div><!--Close sidebar-->
<div class="subpage">
	<div id="subpage-navbar">
		<ul id="subpage-nav">
			<?php wp_nav_menu( array('menu' => 'Our Focus')); ?>
		<ul>
	</div><!--End subpage nav-->

	<?php $my_wp_query= new WP_Query(array('post_type' => 'page', 'post_parent'=> 4));?>
	<?php while ($my_wp_query->have_posts() ) : $my_wp_query->the_post(); ?>
		<div><h2 class="subpage-title"><?php the_title(); ?></h2><p class="subpage-text"><?php the_content(); ?></p></div>
	<?php endwhile; ?>
</div><!--Close sub page-->
</div><!--Close Page main-->
<?php get_footer(); ?>

