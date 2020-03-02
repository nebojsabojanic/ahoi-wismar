<?php
/*
  Template Name: Front page
 */
get_header();


// Section 1

// Section 2

// Section 3

// Section 4

// Section 5

// Section 6

?>


	<main class="page-content">


		<section class="section section--1">

			<?php
			$section1 = get_field('section_1');

			if( $section1 ): ?>
				<div class="d-flex d-jcsb pad-l-10">
					<div class="grid-60">
						<?php echo $section1['paragraph']; ?>
					</div>

					<figure class="grid-35">
						<img src="<?php echo esc_url( $section1['image']['url'] ); ?>" alt="<?php echo esc_attr( $section1['image']['alt'] ); ?>" />
					</figure>
				</div>
			<?php endif; ?>

		</section><!-- End: section--1 -->





		<section class="section section--2">

			<?php
			$section2 = get_field('section_2');

			if( have_rows('section_2') ):
				while ( have_rows('section_2') ) :
				the_row(); ?>

				<div>
					<div class="grid-60">
						<h3><?php echo $section2['title']; ?></h3>
						<?php echo $section2['paragraph']; ?>

						<ul>
							<?php if( have_rows('list') ):
								while ( have_rows('list') ) : the_row(); ?>

									<li><?php echo get_sub_field('list_item'); ?></li>

								<?php endwhile;
							endif; ?>
						</ul>
					</div>
				</div>

				<?php endwhile;
			endif; ?>

		</section><!-- End: section--2 -->





		<section class="section section--3">

			<?php
			$section3 = get_field('section_3');
			if( $section3 ): ?>
				<div>
					<figure>
						<img src="<?php echo esc_url( $section3['image_1']['url'] ); ?>" alt="<?php echo esc_attr( $section3['image_1']['alt'] ); ?>" />
					</figure>

					<figure>
						<img src="<?php echo esc_url( $section3['image_2']['url'] ); ?>" alt="<?php echo esc_attr( $section3['image_2']['alt'] ); ?>" />
					</figure>

					<figure>
						<img src="<?php echo esc_url( $section3['image_3']['url'] ); ?>" alt="<?php echo esc_attr( $section3['image_3']['alt'] ); ?>" />
					</figure>
				</div>
			<?php endif; ?>

		</section><!-- End: section--3 -->





		<section class="section section--4">

			<?php
			$section4 = get_field('section_4');
			if( have_rows('section_4') ):
				while ( have_rows('section_4') ) :
				the_row(); ?>

				<figure>
					<img src="<?php echo esc_url( $section4['background_image']['url'] ); ?>" alt="<?php echo esc_attr( $section4['background_image']['alt'] ); ?>" />
				</figure>

				<div>
					<?php echo $section4['title']; ?>

					<ul>
						<?php if( have_rows('list') ):
							while ( have_rows('list') ) : the_row(); ?>

								<li><?php echo get_sub_field('list_item'); ?></li>

							<?php endwhile;
						endif; ?>
					</ul>
				</div>

				<?php endwhile;
			endif; ?>

		</section><!-- End: section--4 -->





		<section class="section section--5">

			<?php
			$section5 = get_field('section_5');
			if( have_rows('section_5') ):
				while ( have_rows('section_5') ) :
				the_row(); ?>

				<div>
					<div class="grid-60">
						<?php echo $section5['title']; ?>

						<ul>
							<?php if( have_rows('list') ):
								while ( have_rows('list') ) : the_row(); ?>

									<li><?php echo get_sub_field('list_item'); ?></li>

								<?php endwhile; // End: list loop
							endif; ?>
						</ul>
					</div>

					<figure>
						<img src="<?php echo esc_url( $section4['image']['url'] ); ?>" alt="<?php echo esc_attr( $section4['image']['alt'] ); ?>" />
					</figure>
				</div>

				<?php endwhile; // End: section_5 loop
			endif; ?>	

		</section><!-- End: section--5 -->





		<section class="section section--6">

			<?php
			$section6 = get_field('section_6');



			if( have_rows('section_6') ):
				while ( have_rows('section_6') ) :
				the_row(); ?>

				<div>
					<div class="grid-60">
					<?php echo $section6['paragraph']; ?>
					</div>
					
					<div class="room d-flex d-col">

						<?php if( have_rows('rooms') ):
							while ( have_rows('rooms') ) : the_row(); ?>

								<div class="room__single">
									<div class="room__description">
										<h3><?php echo get_sub_field('title'); ?></h3>
										<p><?php echo get_sub_field('description'); ?></p>
									</div>

									<div class="room__design">
										<figure>
											<img src="<?php echo esc_url( $section6['image']['url'] ); ?>" alt="<?php echo esc_attr( $section6['image']['alt'] ); ?>" />
										</figure>
									</div>

									<p class="room__size"><?php echo get_sub_field('size'); ?></p>

								</div><!-- End: room__single -->

							<?php endwhile; // End: rooms loop
						endif; ?>

						<p class="information-details"><?php echo $section6['information_details']; ?></p>

					</div><!-- End: room -->
				</div>

				<?php endwhile; // End: section_6 loop
			endif; ?>

		</section><!-- End: section--6 -->


	</main><!-- End: page-content -->

  
<?php get_footer(); ?>
