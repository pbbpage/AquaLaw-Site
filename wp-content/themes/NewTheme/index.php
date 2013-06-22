<?php get_header(); ?>

<!-- WordPress Loop -->
<div class="blogpostwrapper">
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div>
	<?php the_content(); ?>
	</div>
	<?php endwhile; ?>
<?php endif; ?>
</div>
<!-- End WordPress Loop -->


<?php get_footer(); ?>