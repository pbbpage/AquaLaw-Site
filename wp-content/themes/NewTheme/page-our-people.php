<?php get_header(); ?>
<div id="container-employees">
	<div class="employee-category">
		<h2 class="category-name">Attorneys</h2>
		<?php
		$employeepost = array('post_type' => 'aqualaw_employees', 'meta_key' => 'employee_category', 'meta_value' => 'Attorneys' );
		$loop = new WP_Query($employeepost);
		?>
			
			<?php $count =1; ?>
			<ul class="employees">
			<?php while ($loop->have_posts() ) : $loop->the_post(); ?>
			<?php get_template_part( 'content', 'employee' ); ?>
			<?php $count++; endwhile; ?>
			</ul>
	</div>
	<div class="employee-category">	
		<h2 class="category-name">Client Service</h2>
		<?php
		$employeepost = array('post_type' => 'aqualaw_employees', 'meta_key' => 'employee_category', 'meta_value' => 'Client Service' );
		$loop = new WP_Query($employeepost);
		?>
			<?php $count =1; ?>
			<ul class="employees">
			<?php while ($loop->have_posts() ) : $loop->the_post(); ?>
			<?php get_template_part( 'content', 'employee' ); ?>
			<?php $count++; endwhile; ?>
			</ul>
	</div>
	<div class="employee-category">
		<h2 class="category-name">Legal Support</h2>
		<?php
		$employeepost = array('post_type' => 'aqualaw_employees', 'meta_key' => 'employee_category', 'meta_value' => 'Legal Support' );
		$loop = new WP_Query($employeepost);
		?>
			<?php $count =1; ?>
			<ul class="employees">
			<?php while ($loop->have_posts() ) : $loop->the_post(); ?>
			<?php get_template_part( 'content', 'employee' ); ?>
			<?php $count++; endwhile; ?>
			</ul>
	</div>
	<div class="employee-category">
		<h2 class="category-name">Colleagues</h2>
		<?php
		$employeepost = array('post_type' => 'aqualaw_employees', 'meta_key' => 'employee_category', 'meta_value' => 'Colleagues' );
		$loop = new WP_Query($employeepost);
		?>
			<?php $count =1; ?>
			<ul class="employees">
			<?php while ($loop->have_posts() ) : $loop->the_post(); ?>
			<?php get_template_part( 'content', 'employee' ); ?>
			<?php $count++; endwhile; ?>
			</ul>
	</div>
</div>
<?php get_footer(); ?>