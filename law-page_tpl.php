<?php
/*
  Template Name: Law pages
 */
get_header();

$waves 		= get_field('waves', 'option');

$footerQuestion = get_field('question_phrase', 'option');

global $post;
$slug = $post->post_name;
?>

	<main class="page-content">

		<?php if ( have_posts() ) :
			while ( have_posts() ) :
				the_post(); ?>

				<div class="law <?php echo $slug; ?> pad-l-10 grid-1340">

					<div class="law__description"><?php the_content(); ?></div>

					<?php if( have_rows('rules') ):
						while ( have_rows('rules') ) :
						the_row(); ?>

						<div class="law__rule">

							<h4 class="law__title"><?php the_sub_field('title'); ?></h4>

							<div class="law__content">
								<?php the_sub_field('content'); ?>
							</div>

						</div><!-- End: law__rule -->

						<?php endwhile; // End: rules loop
					endif; ?>

					<p class="information-details"><?php echo $footerQuestion; ?></p>

				</div><!-- End: law -->

			<?php endwhile;
		endif; ?>

	</main><!-- End: page-content -->

<?php get_footer(); ?>