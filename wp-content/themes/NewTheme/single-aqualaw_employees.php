<?php
	/*Template Name: Employee Profile Template
	*/
get_header(); ?>
<div id="page-main">
<?php while (have_posts()) : the_post(); ?>
	<div id="sidebar">
		<div id="image-wrap">
			<?php the_post_thumbnail('post-page-icon'); ?>
		</div><!--Close image-wrap-->
		<div id="sidebar-contact-info">
			<h2 class="widgettitle">Contact <?php the_title(); ?></h2>
			<ul class="icons">
				<li class="phone"><a><?php the_field('company_phone_number', 'option')?> x<?php the_field('phone_number_extension')?></a></li>
				<li class="email"><a href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a></li>
			</ul>
		</div><!--Close Sidebar-contact-info-->
	</div><!--End sidebar-->
	<article id="article">
		<div id="article-title">
			<h id="article-title"><?php the_title(); ?></h>
			<h2><?php the_field('position'); ?></h2>
		</div>
		<?php the_content();?>
		<a href="<?php bloginfo('url'); ?>/our-people/" class="button">View Our Team</a>
	</article>

<?php endwhile; ?>
</div><!--Close page -->
<?php get_footer(); ?>