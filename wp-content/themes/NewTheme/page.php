<?php get_header() ?>
<div class="blogpostwrapper">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div>
		<?php the_content(); ?>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer() ?>