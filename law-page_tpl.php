<?php
/*
  Template Name: Law pages
 */
get_header();

$waves 		= get_field('waves', 'option');

?>

	<main class="page-content">

		<div class="law-page">
			<?php the_content(); ?>
		</div>

	</main><!-- End: page-content -->

<?php get_footer(); ?>