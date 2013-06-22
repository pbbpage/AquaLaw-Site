<?php get_header() ?>
<div id="page-main">

	<div id="photo-banner">
		
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<ul class="cycle-slideshow" data-cycle-timeout="5000" data-cycle-slides="li" data-cycle-swipe="true" data-cycle-fx="fade" data-cycle-pager="#custom-pager" data-cycle-pager-template="<strong><a href=#>&bull;</a></strong>" style="position: relative;  ">
				<div class="cycle-pager"></div>
				<?php
					$images =& get_children( array (
						'post_parent' => $post->ID,
						'post_type' => 'attachment',
						'post_mime_type' => 'image'
					));
				
					if ( empty($images) ) {
						// no attachments here
					} else {
						?>
						
						<?php foreach ( $images as $attachment_id => $attachment ) : ?>
							
								<li class="slide">
									<div class="caption">
										<h3><?php echo $attachment->post_excerpt; ?></h3>
										<div class="learn-more">
											<a href="<?php bloginfo('url'); ?>/our-focus/" class="button">Learn more</a>
										</div><!--End Learn-More-->
										
									</div>
									<div class="pattern-layer"></div>
									<div class="image"><?php echo wp_get_attachment_image( $attachment_id, 'Photo-display'); ?></div>
									
									
								</li>
							
							
						<?php	endforeach;
						}
						?>
					</ul>
					
				<?php endwhile; ?>
				<?php endif; ?>
				<div id="custom-pager"></div>
	</div> <!--Close Photo-banner-->
	
		<div id="sidebar">

			<?php dynamic_sidebar(1); ?>
			
			<ul class="icons">
				<li class="address"><a href="<?php the_field('google_search_link_for_address', 'option')?>"><?php the_field('address', 'option'); ?></a></li>
				<li class="email"><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li>
			</ul>
		</div><!--End sidebar--><?php if(have_posts()) : ?>
	<?php while(have_posts()): the_post(); ?>	
		<article id="article">
			<h id="article-title"><?php the_title(); ?></h>
			<p><img id="10-yr-logo" src="<?php bloginfo('template_directory'); ?>/images/aqualaw10-yr_03.png" height="62" width="200"><?php the_content() ?></p>
			<a href="<?php bloginfo('url'); ?>/our-focus/" class="button">Learn more about us</a>
		
		</article>
	<?php endwhile; ?>
<?php endif;?>

	
	
		
	</div><!--End page-main-->
<?php get_footer() ?>