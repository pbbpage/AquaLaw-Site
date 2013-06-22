<?php get_header();?>
<div id="page-main">
	<article id="announcement-posts">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="announcement-title">
						<h2><?php the_title(); ?></h2>
						<div class="icon-label">
							<ul class="icons">
								<li class="date"><a><?php the_date(); ?></a></li>
								<li><?php the_category(); ?></li>
							</ul>
						</div><!--icon-label close-->
					</div><!--Close announcement title-->
					<?php the_content() ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</article>
</div><!--end page-main-->
<?php get_footer(); ?>