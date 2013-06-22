			<li class="employee <?php if($count%2==0) : echo 'even'; endif; ?>">
				<div id="contact-icon">
					<div id="employee-image"><?php the_post_thumbnail('our-people-icon'); ?></div>
					<div id="employee-info">
						<div class="name">
							<a href="<?php the_permalink(); ?>" class="name-link"><?php the_title(); ?></a>
							<a href="<?php the_permalink(); ?>" class="button">More</a>
						</div>
						<ul class="position">
							<li><?php the_field('position'); ?></li>
							<li><a href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a></li>
							<li><?php the_field('company_phone_number', 'option')?> x<?php the_field('phone_number_extension')?></li>
						</ul>
					</div><!--Close employee info-->
				</div>
			</li>