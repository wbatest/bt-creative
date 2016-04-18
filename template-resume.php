<?php
/**
 * Template Name: Resume Page
 *
 * 
 *
 */
get_header(); ?>

<div id="main-content" class="main-content">

	<div class="content-area">
			
		<?php if( have_rows('jobs') ): ?>

	<ul class="slides">

	<?php while( have_rows('jobs') ): the_row(); 

		// vars
			$job = get_sub_field('job_image');
			$job_color = get_sub_field('job_image_color');
			$employer = get_sub_field('employer');
			$location = get_sub_field('employer_location');
			$employment_description = get_sub_field('employment_description');

		?>

		<li class="tiles">
			<div class="hover" id="job-color" style="background-image: url(<?php echo $job_color['url'] ;?>);">
			<img src="<?php echo $job['url']; ?>" alt="<?php echo $job['alt'] ?>" />
			</div>
			

			<h3><?php echo $employer; ?></h3>
			<h4><?php echo $location; ?></h4>

			<p><?php echo $employment_description; ?></p>

		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>

	</div>

</div><!-- #main-content -->

<?php

get_footer();?>

<!-- 
$job = get_sub_field('job_image');
					$job_color = get_sub_field('job_image_color');
					$employer = get_sub_field('employer');
					$location = get_sub_field('employer_location');
					$employment_description = get_sub_field('employment_description');


 -->