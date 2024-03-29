<?php get_header(); ?>
<div id="page-main">
	<div id="get-in-touch">
		<div id="text">
			<h5>Get in touch</h5>
				<ul class="icons-alt">
					<li class="address-alt"><p><a href="<?php the_field('google_search_link_for_address', 'option')?>"><?php the_field('address', 'option'); ?></a></p></li>
					<li class="phone-alt"><p><?php the_field('company_phone_number', 'option'); ?></p></li>
				</ul>
		</div>
		<div id="map-image">
			<iframe width="541" height="325" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Aqualaw+6+South+5th+Street,+Richmond+VA+23219&amp;aq=&amp;sll=37.539839,-77.440433&amp;sspn=0.011757,0.026565&amp;t=m&amp;gl=co&amp;g=6+S+5th+St,+Richmond,+VA+23219,+USA&amp;ie=UTF8&amp;hq=Aqualaw&amp;hnear=6+S+5th+St,+Richmond,+Virginia+23219,+United+States&amp;cid=14678690680016499984&amp;ll=37.549001,-77.437992&amp;spn=0.032664,0.054932&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small></small>		
			</div><!--Close map-image-->
	</div><!--Close get in touch-->
	<div id="contact-form">
		<div id="wrap">
			<?php if (have_posts()) : ?>
				<?php while (                                    have_posts()) : the_post(); ?>
					<h2>Contact Form</h2>
					<p id="contact-instructions">Feel free to contact us anytime, or use this form and we'll get back to you as soon as we can.</p>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div><!--Close contact form-->
</div><!--Close page-main-->
<?php get_footer(); ?>