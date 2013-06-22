<?php get_header(); ?>
<div id="page-main">
<div id="sidebar">
	<?php dynamic_sidebar(2); ?>
	<ul class="icons">
		<li class="address"><a href="<?php the_field('google_search_link_for_address', 'option')?>"><?php the_field('address', 'option'); ?></a></li>
		<li class="email"><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li>
	</ul>
	<?php 
	 
	$rows = get_field('repeater');
	if($rows)
	{
		echo '<ul>';
	 
		foreach($rows as $row)
		{
			#echo '<li><img src=" . $row['image']['url'] . "> ' . $row['company_website'] .'</li>';
			
			$output  = '<li><a href="%s"><img src="%s" alt="%s"></a></li>';
			
			echo sprintf($output, $row['company_website'], $row['image']['url'], $row['image']['title']);
		}
	 
		echo '</ul>';
		#print_r($rows);
	}
	
	?>


</div><!--End sidebar-->
<?php if(have_posts()) : ?>
	<?php while(have_posts()): the_post(); ?>	
		<article id="article">
		<h id="article-title"><?php the_title(); ?></h>
		<?php the_content() ?>
		</article>
	<?php endwhile; ?>
<?php endif;?>
		
</div><!--Close page main-->
<?php get_footer(); ?>