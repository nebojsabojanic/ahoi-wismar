<?php while(the_flexible_field("preciscivac_content")): ?>

        <?php if(get_row_layout() == "paragraph") { ?>
                
       

          
               <section>
                
                <div class="blog__paragraph"><!-- start preciscivac__paragraph -->

                        <?php the_sub_field('paragraph');?>

                </div> <!-- end preciscivac__paragraph -->
              
                </section>
        <?php } ?>   


                <?php if(get_row_layout() == "image") { ?>


                        <?php  
                        $singleImage = get_sub_field('image'); 
                        $alt         = $singleImage['alt'];
                        $url         = $singleImage['url'];
                        $title       = $singleImage['title'];
                        $imageCaption = get_sub_field('caption');

                        
                        $preciscivacThumb = $singleImage['sizes']['single-blog-thumbnail'];

                        ?>
                                <section>

                                <div class="blog__image">
                                <img src="<?php echo $preciscivacThumb;?>" alt="<?php echo $alt;?>" title="<?php echo $title;?>">

                               


                                        <?php if ( get_sub_field('caption') ) : ?>
                                        
                                        <figcaption><?php if ($imageCaption) : ?> <?php echo $imageCaption;?><?php endif; ?></figcaption>
                                        <?php endif; ?>
                        
                                

                                </div>

                        </section>


                <?php } ?>   


<?php if(get_row_layout() == "blockquote") { ?>


        <blockquote><?php the_sub_field('blockquote');?></blockquote>


<?php } ?>   


<?php if(get_row_layout() == "2_images") { ?>
<?php
        
        $singleImage = get_sub_field('image'); 
        $alt         = $singleImage['alt'];
        $url         = $singleImage['url'];
        $title       = $singleImage['title'];

        $singleImage2 = get_sub_field('second-image'); 
        $alt2         = $singleImage2['alt'];
        $url2         = $singleImage2['url'];
        $title2       = $singleImage2['title'];
        
        $imageCaption = get_sub_field('caption');
        ?>

                <div class="preciscivac__photos"><!-- start preciscivac_col-2-->

                <div class="preciscivac__blog__flex">

                        <div class="grid-50"><img src="<?php echo $url;?>" alt="<?php echo $alt;?>" title="<?php echo $title;?>"></div>
                        <div class="grid-50"><img src="<?php echo $url2;?>" alt="<?php echo $alt2;?>" title="<?php echo $title2;?>"></div>

                </div>

                <figcaption><?php if ($imageCaption) : ?> <?php echo $imageCaption;?><?php endif; ?></figcaption>

                </div><!-- start preciscivac_col-2-->


<?php } ?>   


<?php if(get_row_layout() == "table") { ?>


        <div class="preciscivac__table"><!-- start preciscivac__table -->

<?php 

$imageCaption = get_sub_field('caption');
$table = get_sub_field( 'table' );

if ( $table ) { ?>

	<?php if ( $table['header'] ) { ?>

		<div class="blog">

			<table class="table_blog">

				<thead>
					<tr>
						<?php foreach ( $table['header'] as $th ) { ?>
							<th class="table_blog__heading">
								<?php echo $th['c']; ?>
							</th>
						<?php } ?>
					</tr>
				</thead>

				<tbody>
					<?php foreach ( $table['body'] as $tr ) { ?>

						<tr>
							<?php foreach ( $tr as $td ) { ?>

								<td class="table_blog__data">
									<?php echo $td['c']; ?>
								</td>

							<?php } ?>
						</tr>

					<?php } // End: $table['body'] as $tr ?>
				</tbody>

			</table>
                        <?php if ( get_sub_field('caption') ) : ?>
					
					<figcaption><?php if ($imageCaption) : ?> <?php echo $imageCaption;?><?php endif; ?></figcaption>
					<?php endif; ?>
                        
		</div><!-- End: acf-table -->





	<?php } else { // If don't have table header ?>

		<div class="acf-block acf-table">

			<table>

				<tbody class="fls-table-body">
					<?php foreach ( $table['body'] as $tr ) { ?>
						<tr>
							<?php foreach ( $tr as $td ) { ?>

								<td class="table-data-only">
									<?php echo $td['c']; ?>
								</td>

							<?php } ?>
						</tr>
					<?php } ?>
				</tbody>

			</table>

		</div><!-- End: acf-table -->

	<?php } // End: if have table header ?>
<?php } ?>

</div>

<!-- ============================= END:Module table ================================= -->

<?php } ?>

<?php if(get_row_layout() == "video") { ?>

        <div class="preciscivac__video">
        <?php the_sub_field('video');?>

        </div>

<?php } ?>   

<?php endwhile; ?>