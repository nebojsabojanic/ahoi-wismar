<section class="specifications">

    <div class="specifications__description">

    
    <?php 
    
        // get global description
        $globalDescription = get_field('glavniopis');
        echo $globalDescription;
    
    ?>  


    <div class="flex-grid"><!-- start flex-grid -->
                    
         <?php if ( have_rows('stavke') ) : ?>
        
            <?php while( have_rows('stavke') ) : the_row(); ?>
        
                <?php

                        // get main title
                        $title       = get_sub_field('naslov');

                        // get icon
                        $icon        = get_sub_field('ikonica');

                        //get opis
                        $description = get_sub_field('opis');
                
                    ?>

                        
                    <div class="flex-grid__col col--3"> <!-- start col--3 -->

                        <div class="specifications__content">
                            
                            <div class="specifications__title">
                            
                                <div class="specification__title--icon"><?php echo $icon?></div>
                                <h3><?php echo $title?></h3>
                                
                            </div>
                            
                        <?php echo $description?>
                            
                        </div>

                    </div><!-- end col--3 -->
    
                <?php endwhile; ?>
            
            <?php endif; ?>
            
   
    </div><!-- end flex-grid -->


</div><!-- end grid-1280 -->


</section>