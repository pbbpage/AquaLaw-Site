<?php get_header() ?>
<?php
$study = array('post_type' => 'case_study' );
$loop = new WP_Query($study);
?>
			
<?php while ($loop->have_posts() ) : $loop->the_post(); ?>
<article id="announcement-posts">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="case-study">
				<div class="title">
					<h2><?php the_title(); ?></h2>
				</div><!--Close title-->
				<h3><?php the_field('location'); ?></h3>
				<?php the_content() ?>
				<a href="<?php the_permalink(); ?>" class="button">Read More</a>
			</div><!--End case-study-->
		<?php endwhile; ?>
	<?php endif; ?>
</article>

			<?php endwhile; ?>
<?php get_footer() ?>

