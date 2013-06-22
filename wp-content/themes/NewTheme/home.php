<?php /*
Template Name: Employee Profile Template 
*/  get_header(); ?>
<div id="page-main">
	<div id="sidebar">
		<div class="icons">
			<?php dynamic_sidebar(3); ?>
		</div>
	</div><!--End sidebar-->
<article id="announcement-posts">
	<?php query_posts('showposts=9');?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="announcement">
				<div class="announcement-title">
					<h2><?php the_title(); ?></h2>
					<div class="icon-label">
						<ul class="icons">
							<li class="date"><a><?php the_date(); ?></a></li>
							<li><?php the_category(); ?></li>
						</ul>
					</div><!--icon-label close-->
				</div><!--Close announcement title-->
				<?php the_excerpt() ?>
				<a href="<?php the_permalink(); ?>" class="button">Read More</a>
			</div><!--End announcement-->
		<?php endwhile; ?>
	<?php endif; ?>
</article>
<!--
<div class="pagination">
	<ul>
		<li class="disabled"><a href="#">Previous</a></li>
		<li class="active"><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">Next</a></li>
	</ul>
</div>
-->
</div><!--End page main-->

<?php get_footer(); ?>