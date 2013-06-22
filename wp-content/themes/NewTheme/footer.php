	</div> <!--Close Main -->
	<div id="gap"></div>
	<div id="footer">
		<div id="footer-interior">
			<div id="footer-interior-wrap">
				<div id="nav-wrap">
					<ul>
						<?php wp_nav_menu( array('menu' => 'Footer_Menu')); ?>	
					</ul>
				</div><!---Close nav-wrap-->
				<ul id="contact-info">
					<li id="ci-list-item"><a href="<?php the_field('google_search_link_for_address', 'option')?>"><?php the_field('address', 'option'); ?></a></li>
					<li id="ci-list-item"><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li>
				</ul>
				<p class="copyright">Copyright © <?php the_field('copyright_message', 'option'); ?></p>
			</div><!--Close Footer Interior wrap-->
		</div><!--Close footer-interior-->
	</div> <!--Close footer-->
</div> <!--Close Container-->


<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>