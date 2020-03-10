<?php

get_header(); ?>




<section class="blog">

    <div class="blog__grid--size">

            <h1>Blog</h1>

              <div class="flex-grid"><!-- start flex-grid -->

                 <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 10,
                            //ove linije koda ispod drasticno ubrzavavaju brzinu querija i uubacene su zbog performansi
                            'ignore_sticky_posts'	=> true,
                            'no_found_rows'		=> true,
                            'update_post_meta_cache' => false, 
	                        'update_post_term_cache' => false

                        );

                        $post_query = new WP_Query($args);
                            if($post_query->have_posts() ) {
                            while($post_query->have_posts() ) {
                                $post_query->the_post();
                        ?>
                    

                            <div class="flex-grid__col col--3"> <!-- start col--3 -->

                            <div class="blog__article">

                            <?php 
                                
                                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'pv-thumbnail' );

                              ?>

                               
                              <a href="<?php echo get_permalink();?>">
                                      
                                  <img data-src="<?php echo $thumb[0]; ?>" class="lazyloaded" alt="<?php echo $thumb['alt'] ;?>" title="<?php echo $thumb['title'] ;?>" src="<?php echo $thumb[0]; ?>">
                                      
                                  
                                            <div class="blog__content">
                                            
                                                <div class="blog__date"><i class="fas fa-calendar-day" aria-hidden="true"></i> <span><?php echo get_the_date( 'm D, Y' ); ?></span></div>
                                                <h4><?php the_title();?></h4>

                                            </div>
                                    </a>
                                      
                                    <?php if ( get_field('source') ) : ?>
                                                    <p><?php echo get_field('sourcedata');?></p>
                                    <?php endif; ?>
  
                            </div> <!-- end blog__article -->


                            </div><!-- end col--3 -->

                    
                    <?php

                        
                       /* Restore original Post Data */
                         wp_reset_postdata();
                            }
                        }
                    ?>   
            
            </div><!-- end flex-grid -->

        </div><!-- end blog__grid--size--->

</section>
                     


        
<?php get_footer(); ?>