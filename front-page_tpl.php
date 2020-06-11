<?php
/*
  Template Name: Front page
 */
get_header();


$waves 		= get_field('waves', 'option');
$seagull 	= get_field('graphics_seagull', 'option');

$footerQuestion = get_field('question_phrase', 'option');

?>


	<main class="page-content">


		<section class="section section--1">

			<div class="grid-1340 d-flex d-jcsb d-aic d-wrap d-fdc-t">

				<?php
				$section1 = get_field('section_1');

				if( $section1 ): ?>
					<div class="section__paragraph grid-60 pad-l-10">
						<?php echo $section1['paragraph']; ?>
					</div>

					<div class="grid-35">
						<svg xmlns="http://www.w3.org/2000/svg" width="452" height="322.29" viewBox="0 0 452 322.29">
							<g id="Group_83" data-name="Group 83" transform="translate(-1273.512 -334.685)">
								<g id="Group_9" data-name="Group 9" transform="translate(1273.512 334.685)">
									<path id="Path_102" data-name="Path 102" d="M1379.4,353.052a9.927,9.927,0,0,0-17.211-5.463l-.094.112c-.044-.179-.091-.358-.142-.534a9.433,9.433,0,0,0-18.25,4.72,6.952,6.952,0,0,0-1.638-.2c-4.258,0-9.069,3.559-9.724,6.4h62.8S1390.13,351.864,1379.4,353.052Z" transform="translate(-1133.697 -320.958)" fill="#96d8ee"/>
									<path id="Path_103" data-name="Path 103" d="M1375.96,366.394a14.762,14.762,0,0,0-25.594-8.124c-.047.054-.094.111-.142.165-.064-.27-.132-.533-.213-.793a14.026,14.026,0,0,0-27.137,7.017,10.4,10.4,0,0,0-2.434-.294c-6.331,0-13.49,5.294-14.465,9.522h93.4S1391.915,364.628,1375.96,366.394Z" transform="translate(-1196.365 -303.832)" fill="#96d8ee"/>
									<g id="Group_6" data-name="Group 6" transform="translate(48.318)">
										<path id="Path_104" data-name="Path 104" d="M1349.815,345.6a14.868,14.868,0,0,0-4.845.814,9.034,9.034,0,0,0-16.991-5.663A13.44,13.44,0,0,0,1303.4,346.5a14.983,14.983,0,0,0-3.232-.358,14.778,14.778,0,0,0-12.344,6.645H1362.5A14.781,14.781,0,0,0,1349.815,345.6Z" transform="translate(-1287.822 -334.685)" fill="#96d8ee"/>
									</g>
									<g id="boat" data-name="Group 8" transform="translate(0 -10)">
										<g id="Group_7" data-name="Group 7">
										<path id="Path_105" data-name="Path 105" d="M1341.7,377.569l3.278.745V365.587H1341.7Z" transform="translate(-1111.47 -359.031)" fill="#2f3134"/>
										<path id="Path_106" data-name="Path 106" d="M1389.874,385.4H1367l7.727,16.635Z" transform="translate(-1051.333 -311.934)" fill="#494b4e"/>
										<path id="Path_107" data-name="Path 107" d="M1666.745,454.909q-21.287-.745-40.644-2.006l-41.374-1.05c-27.731-.7-66.66-8.6-83.286-11.966-2.958-.6-5.292-1.074-6.47-1.28-12.416-2.3-28.728-5.453-44.811-9.451-7.715-1.884-15.451-3.95-22.2-5.764l-21.657-6.183c-9.916-2.576-36.629-9.38-42.332-10.258l-.281-.044-.273-.067c-10.9-2.657-24.159-4.376-37.834-5.467-9.3-.743-18.787-1.2-27.853-1.455,10.146,18.433,41.332,70.618,69.236,70.618H1662.5l5.362-13.949A1.239,1.239,0,0,0,1666.745,454.909Zm-305.317-8.387a7.393,7.393,0,1,1,7.392-7.395A7.395,7.395,0,0,1,1361.428,446.521Zm22.583,0a7.393,7.393,0,1,1,7.391-7.395A7.4,7.4,0,0,1,1384.011,446.521Zm22.579,0a7.393,7.393,0,1,1,7.395-7.395A7.394,7.394,0,0,1,1406.59,446.521Z" transform="translate(-1215.95 -277.44)" fill="#d85552"/>
										<path id="Path_108" data-name="Path 108" d="M1413.874,470.742c-27.9,0-59.09-52.185-69.237-70.618q-2.837-.081-5.612-.138c-5.508-.111-10.8-.155-15.735-.155-24.791,0-44.037,1.107-44.226,1.118l-1.067.064,56.358,89.29c5.328,6.541,10.468,11.848,22.427,11.848,15.975,0,15.975-14.067,31.949-14.067s15.978,14.067,31.956,14.067,15.975-14.067,31.949-14.067,15.974,14.067,31.952,14.067,15.974-14.067,31.952-14.067,15.978,14.067,31.956,14.067,15.974-14.067,31.948-14.067,15.979,14.067,31.96,14.067,15.974-14.067,31.949-14.067,15.985,14.067,31.969,14.067a36.757,36.757,0,0,0,18.092-4.322,24.157,24.157,0,0,0,11.167-14.273l3.825-12.814H1413.874Z" transform="translate(-1262.854 -277.646)" fill="#af3f43"/>
										<path id="Path_109" data-name="Path 109" d="M1414.828,399.544a1.631,1.631,0,0,1-1.591-2.039l3.92-15.488-53.61-12.176a6.183,6.183,0,0,0-6.3,2.293L1330,408.012h114.466l-8.978-19.327a6.19,6.19,0,0,0-4.268-3.475l-10.866-2.468-3.94,15.566A1.638,1.638,0,0,1,1414.828,399.544Z" transform="translate(-1139.263 -349.29)" fill="#97b7bd"/>
										<path id="Path_110" data-name="Path 110" d="M1519.489,478.557l-.122-.02-43.26-93.133H1343.593l-24.024,31.638c72.525,7.962,129.485,49.241,144.257,52.884C1479.642,473.83,1519.192,478.557,1519.489,478.557Zm-90.935-66.184H1344.3a1.238,1.238,0,0,1-1.03-1.928l9.7-14.448a6.2,6.2,0,0,1,5.142-2.742H1409.8a18.569,18.569,0,0,1,13.617,5.939l7.405,7.975A3.1,3.1,0,0,1,1428.554,412.373Z" transform="translate(-1164.055 -311.933)" fill="#97b7bd"/>
										<path id="Path_111" data-name="Path 111" d="M1419.8,416.662c7.3,1.124,43.055,10.41,43.055,10.41l21.735,6.206c7.293,1.962,14.6,3.9,21.954,5.7,14.692,3.653,29.562,6.615,44.446,9.373,7.037,1.226-45.348-25.807-83.858-35.913-26.762-8.2-84.394-17.207-125.088-18.3-26.28-.706-60.633-.955-67.879-.709a.624.624,0,0,0-.537.982l12.973,15.978S1373.3,405.317,1419.8,416.662Z" transform="translate(-1273.512 -293.083)" fill="#2f3134"/>
										<path id="Path_112" data-name="Path 112" d="M1325.5,390.2h169.963a1.859,1.859,0,0,0,1.641-.983l2.387-4.477a1.856,1.856,0,0,0-1.638-2.732H1325.5a1.859,1.859,0,0,0-1.861,1.857v4.477A1.859,1.859,0,0,0,1325.5,390.2Z" transform="translate(-1154.378 -320.006)" fill="#82989e"/>
										<path id="Path_113" data-name="Path 113" d="M1358.608,391.755l-3.92,15.488a1.639,1.639,0,0,0,3.178.8l3.94-15.566.8-3.181,6-23.714h-3.383l-5.815,22.988Z" transform="translate(-1080.713 -359.03)" fill="#2f3134"/>
										<path id="Path_114" data-name="Path 114" d="M1369.349,393.668a18.57,18.57,0,0,0-13.617-5.939H1342.32c4.653,4.244,7.449,9.535,7.449,15.3a17.843,17.843,0,0,1-.459,3.822h25.175a3.1,3.1,0,0,0,2.269-5.2Z" transform="translate(-1109.986 -306.408)" fill="#494b4e"/>
										<path id="Path_115" data-name="Path 115" d="M1379.856,387.729h-38.274a6.2,6.2,0,0,0-5.142,2.742l-9.7,14.449a1.238,1.238,0,0,0,1.03,1.928h59.077a17.843,17.843,0,0,0,.459-3.822C1387.3,397.264,1384.509,391.973,1379.856,387.729Z" transform="translate(-1147.521 -306.408)" fill="#2f3134"/>
										<path id="Path_116" data-name="Path 116" d="M1321.8,409.341a7.393,7.393,0,1,0,7.391,7.391A7.392,7.392,0,0,0,1321.8,409.341Z" transform="translate(-1176.323 -255.045)" fill="#2f3134"/>
										<path id="Path_117" data-name="Path 117" d="M1328.49,409.341a7.393,7.393,0,1,0,7.391,7.391A7.392,7.392,0,0,0,1328.49,409.341Z" transform="translate(-1160.428 -255.045)" fill="#2f3134"/>
										<circle id="Ellipse_10" data-name="Ellipse 10" cx="7.393" cy="7.393" r="7.393" transform="translate(183.248 154.295)" fill="#2f3134"/>
										<path id="Path_118" data-name="Path 118" d="M1439.557,370.2a3.279,3.279,0,0,0,0-6.557H1338.5a3.279,3.279,0,0,0,0,6.557h101.054Z" transform="translate(-1126.85 -363.645)" fill="#82989e"/>
										</g>
									</g>
								</g>
							</g>
						</svg>
					</div><!-- End: grid-35 -->

				<?php endif; ?>

			</div><!-- End: grid-1340 -->

			<figure class="waves waves--1">
				<img src="<?php echo $waves['url']; ?>" alt="<?php echo $waves['alt']; ?>">
			</figure>

		</section><!-- End: section--1 -->





		<div class="background-waves background-waves--light-blue">

			<div class="background-waves__top">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ahoi-wismar-waves-top.svg" alt="Top waves">
			</div>



			<section class="section section--2 section--pad-b section--pad-t">

				<div class="grid-1340 d-flex d-jcsb d-aic d-fdc-t">

					<?php
					$section2 = get_field('section_2');

					if( have_rows('section_2') ):
						while ( have_rows('section_2') ) :
						the_row(); ?>

						<div class="section__paragraph grid-72 pad-l-10">
							<h2 class="white-text"><?php echo $section2['title']; ?></h2>
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
					<div class="grid-1340 d-flex d-jcsb d-fdc-t">
						<figure class="grid-38">
							<img src="<?php echo esc_url( $section3['image_1']['url'] ); ?>" alt="<?php echo esc_attr( $section3['image_1']['alt'] ); ?>" />
							<figcaption><?php echo $section3['image_1_caption']; ?></figcaption>
						</figure>

						<figure class="grid-38">
							<img src="<?php echo esc_url( $section3['image_2']['url'] ); ?>" alt="<?php echo esc_attr( $section3['image_2']['alt'] ); ?>" />
							<figcaption><?php echo $section3['image_2_caption']; ?></figcaption>
						</figure>

						<figure class="grid-20">
							<img src="<?php echo esc_url( $section3['image_3']['url'] ); ?>" alt="<?php echo esc_attr( $section3['image_3']['alt'] ); ?>" />
							<figcaption><?php echo $section3['image_3_caption']; ?></figcaption>
						</figure>
					</div><!-- End: grid-1340 -->
				<?php endif; ?>

			</section><!-- End: section--3 -->



			<div class="background-waves__bottom">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ahoi-wismar-waves-bottom.svg" alt="Bottom waves">
			</div>

		</div><!-- End: background-waves -->



		<section class="section section--4">

			<div class="border-dotted"></div>

			<div class="circle circle--section-4 circle--yellow"></div>

			<?php
			$section4 = get_field('section_4');
			if( have_rows('section_4') ):
				while ( have_rows('section_4') ) :
				the_row(); ?>
				
				<div class="image-behind grid-1340 mb-16r" style="background: url('<?php echo $section4['background_image']['url']; ?>'); background-size: 96% 100%; background-repeat: no-repeat; background-position: 50%;">

					<figure>
						<img src="<?php echo esc_url( $section4['background_image']['url'] ); ?>" alt="<?php echo esc_attr( $section4['background_image']['alt'] ); ?>" />
					</figure>

					<div class="text-over-image pad-l-10">
						<h2><?php echo $section4['title']; ?></h2>

						<ul class="unordered-list">
							<?php if( have_rows('list') ):
								while ( have_rows('list') ) : the_row(); ?>

									<li class="unordered-list__item"><?php echo get_sub_field('list_item'); ?></li>

								<?php endwhile;
							endif; ?>
						</ul>
					</div><!-- End: text-over-image -->

				</div><!-- End: grid-1340 -->

				<?php endwhile;
			endif; ?>

		</section><!-- End: section--4 -->





		<section class="section section--5 section--pad-b">

			<div class="grid-1340 d-flex d-jcsb d-aic d-fdc-t">

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
						<figcaption><?php echo $section5['image_caption']; ?></figcaption>
					</figure>

					<?php endwhile; // End: section_5 loop
				endif; ?>

				<figure class="waves waves--5-2">
					<img src="<?php echo $waves['url']; ?>" alt="<?php echo $waves['alt']; ?>">
				</figure>
			
			</div><!-- End: grid-1340 -->

			<figure class="waves waves--5">
				<img src="<?php echo $waves['url']; ?>" alt="<?php echo $waves['alt']; ?>">
			</figure>

		</section><!-- End: section--5 -->




		<div class="background-waves background-waves--dark-blue">

			<div class="background-waves__top">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ahoi-wismar-waves-top.svg" alt="Top waves">
			</div>



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

								<div class="room__single d-flex d-aic d-fdc-l">
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

						</div><!-- End: room -->

						<figure class="graphics graphics--seagull">
							<img src="<?php echo $seagull['url']; ?>" alt="<?php echo $seagull['alt']; ?>">
						</figure>

						<?php endwhile; // End: section_6 loop
					endif; ?>

				</div><!-- End: grid-1340 -->

			</section><!-- End: section--6 -->

			<p class="information-details"><?php echo $footerQuestion; ?></p>

		</div><!-- End: background-waves -->


	</main><!-- End: page-content -->


<?php get_footer(); ?>
