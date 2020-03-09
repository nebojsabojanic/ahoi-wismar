<?php
/*
  Template Name: Front page
 */
get_header();


$waves 		= get_field('waves', 'option');
$seagull 	= get_field('graphics_seagull', 'option');


?>


	<main class="page-content">


		<section class="section section--1">

			<div class="grid-1340 d-flex d-jcsb d-aic d-wrap">

				<?php
				$section1 = get_field('section_1');

				if( $section1 ): ?>
					<div class="section__paragraph grid-60 pad-l-10">
						<?php echo $section1['paragraph']; ?>
					</div>

					<figure class="grid-35">
						<img src="<?php echo esc_url( $section1['image']['url'] ); ?>" alt="<?php echo esc_attr( $section1['image']['alt'] ); ?>" />
					</figure>

					<div class="border-dotted"></div>
					
				<?php endif; ?>

			</div><!-- End: grid-1340 -->
			
			<figure class="waves waves--1">
				<img src="<?php echo $waves['url']; ?>" alt="<?php echo $waves['alt']; ?>">
			</figure>

		</section><!-- End: section--1 -->





		<section class="section section--2 section--pad-b section--pad-t">

			<div class="grid-1340 d-flex d-jcsb d-aic">

				<?php
				$section2 = get_field('section_2');

				if( have_rows('section_2') ):
					while ( have_rows('section_2') ) :
					the_row(); ?>

					<div class="section__paragraph grid-60 pad-l-10">
						<h2><?php echo $section2['title']; ?></h2>
						<?php echo $section2['paragraph']; ?>

						<ul class="unordered-list">
							<?php if( have_rows('list') ):
								while ( have_rows('list') ) : the_row(); ?>

									<li class="unordered-list__item"><?php echo get_sub_field('list_item'); ?></li>

								<?php endwhile;
							endif; ?>
						</ul>
					</div><!-- End: section__paragraph -->

					<figure class="waves-clouds waves-clouds--2">
						<img src="<?php echo $section2['waves_and_clouds']['url']; ?>" alt="<?php echo $section2['waves_and_clouds']['alt']; ?>">
					</figure>
				
					<?php endwhile;
				endif; ?>

			</div><!-- End: grid-1340 -->

		</section><!-- End: section--2 -->





		<section class="section section--3 section--pad-b">

			<?php
			$section3 = get_field('section_3');
			if( $section3 ): ?>
				<div class="grid-1340 d-flex d-jcsb">
					<figure class="grid-40">
						<img src="<?php echo esc_url( $section3['image_1']['url'] ); ?>" alt="<?php echo esc_attr( $section3['image_1']['alt'] ); ?>" />
					</figure>

					<figure class="grid-40">
						<img src="<?php echo esc_url( $section3['image_2']['url'] ); ?>" alt="<?php echo esc_attr( $section3['image_2']['alt'] ); ?>" />
					</figure>

					<figure class="grid-20">
						<img src="<?php echo esc_url( $section3['image_3']['url'] ); ?>" alt="<?php echo esc_attr( $section3['image_3']['alt'] ); ?>" />
					</figure>
				</div><!-- End: grid-1340 -->
			<?php endif; ?>

		</section><!-- End: section--3 -->





		<section class="section section--4">

			<div class="image-behind grid-1340 mb-8r" style="background: url('https://mediavuk.com/ahoi-wismar/wp-content/uploads/2020/03/ahoi-wismar-startseite-img-5.jpg'); background-size: 96% 100%; background-repeat: no-repeat; background-position: 50%;">

				<?php
				$section4 = get_field('section_4');
				if( have_rows('section_4') ):
					while ( have_rows('section_4') ) :
					the_row(); ?>

					<!-- <figure>
						<img src="<?php echo esc_url( $section4['background_image']['url'] ); ?>" alt="<?php echo esc_attr( $section4['background_image']['alt'] ); ?>" />
					</figure> -->

					<div class="text-over-image pad-l-10 white-text">
						<h2 class="white-text"><?php echo $section4['title']; ?></h2>

						<ul class="unordered-list">
							<?php if( have_rows('list') ):
								while ( have_rows('list') ) : the_row(); ?>

									<li class="unordered-list__item"><?php echo get_sub_field('list_item'); ?></li>

								<?php endwhile;
							endif; ?>
						</ul>
					</div><!-- End: text-over-image -->

					<?php endwhile;
				endif; ?>

			</div><!-- End: grid-1340 -->

		</section><!-- End: section--4 -->





		<section class="section section--5 section--pad-b">

			<div class="grid-1340 d-flex d-jcsb d-aic">

				<?php
				$section5 = get_field('section_5');
				if( have_rows('section_5') ):
					while ( have_rows('section_5') ) :
					the_row(); ?>

					<div class="section__paragraph grid-60 pad-l-10">
						<h2><?php echo $section5['title']; ?></h2>

						<ul class="unordered-list">
							<?php if( have_rows('list') ):
								while ( have_rows('list') ) : the_row(); ?>

									<li class="unordered-list__item"><?php echo get_sub_field('list_item'); ?></li>

								<?php endwhile; // End: list loop
							endif; ?>
						</ul>
					</div>

					<figure class="grid-35">
						<img src="<?php echo esc_url( $section5['image']['url'] ); ?>" alt="<?php echo esc_attr( $section5['image']['alt'] ); ?>" />
					</figure>

					<?php endwhile; // End: section_5 loop
				endif; ?>
			
			</div><!-- End: grid-1340 -->

			<figure class="waves waves--5">
				<img src="<?php echo $waves['url']; ?>" alt="<?php echo $waves['alt']; ?>">
			</figure>

			<figure class="waves waves--5-2">
				<img src="<?php echo $waves['url']; ?>" alt="<?php echo $waves['alt']; ?>">
			</figure>

		</section><!-- End: section--5 -->





		<section class="section section--6 section--pad-b section--pad-t">

			<div class="grid-1340">
				<?php
				$section6 = get_field('section_6');

				if( have_rows('section_6') ):
					while ( have_rows('section_6') ) :
					the_row(); ?>
				
					<div class="section__paragraph">
						<h2 class="white-text"><?php echo $section6['title']; ?></h2>
						<?php echo $section6['paragraph']; ?>
					</div>
					
					<div class="room d-flex d-column">

						<?php if( have_rows('rooms') ):
							while ( have_rows('rooms') ) : the_row();
								$roomImg = get_sub_field('image');
							?>

							<div class="room__single d-flex d-aic">
								<div class="room__description">
									<h3><?php echo get_sub_field('title'); ?></h3>
									<p class="paragraph"><?php echo get_sub_field('description'); ?></p>
								</div>

								<div class="room__design">
									<figure>
										<img src="<?php echo esc_url( $roomImg['url'] ); ?>" alt="<?php echo esc_attr( $roomImg['alt'] ); ?>" />
									</figure>
								</div>

								<p class="room__size"><?php echo get_sub_field('size'); ?></p>

							</div><!-- End: room__single -->

							<?php endwhile; // End: rooms loop
						endif; ?>

						<p class="information-details"><?php echo $section6['information_details']; ?></p>

					</div><!-- End: room -->

					<figure class="graphics graphics--seagull">
						<img src="<?php echo $seagull['url']; ?>" alt="<?php echo $seagull['alt']; ?>">
					</figure>

					<?php endwhile; // End: section_6 loop
				endif; ?>

			</div><!-- End: grid-1340 -->

		</section><!-- End: section--6 -->


	</main><!-- End: page-content -->


<?php get_footer(); ?>
