<?php 

// get form description
$formDescription = get_field('formdescription');

// get form notification
$formNotification = get_field('formnotification');

// get contact form
$contactForm    = get_field('contact');

// get therapy air product image
$productImage = get_field('product');

?>


<section class="form">

<div class="form__container"><!-- start form__container -->

    <div class="form__content">

    <?php echo $formDescription;?>


    </div>

    <div class="flex-grid">

        

        <div class="col--2"><!-- start col--2 -->
            
         
                <div class="form__shadow"><!-- start form__shadow -->

                    <div class="form__notification">


                    <?php echo $formNotification;?>
                       

                    </div>

           
                    <?php echo $contactForm;?>


            <div class="form__description">
                <h5>Webshop</h5>

                    <p>Inovativni prečišćivač vazduha Therapy Air iOn možete naručiti i
                    preko Zepter online prodavnice klikom na dugme:</p>

                    <a href="https://www.zepter.rs/zepter/hzjhtnbtw8" target="_blank" class="btn btn--primary" rel="nofollow">Zepter webshop</a>

            </div>


            <div class="form__description">
                    <h5>Prezentacija</h5>
                    <p>Takođe, pre nego što se odlučite za kupovinu ovog inovativnog uređaja možete zakazati prezentaciju kod Zepter 
                        Lifestyle konsultanta i pogledati uživo zašto je Zepter Therapy Air® iOn najbolji prečišćivač vazduha. 
                        Prezentacije se održavaju u prostorijama zgrade Zepter International, Bulevar Mihajla Pupina 117, Novi Beograd.</p>

            </div>



            </div><!-- end form__shadow -->

            
 
        </div><!-- end col--2 -->


        <div class="col--2">  <img <?php echo $productImage['title'];?> src="<?php echo $productImage['url'];?>" alt="<?php echo $productImage['alt'];?>"></div>
      

    </div><!-- end flex-grid -->


</div><!-- start form__container -->


</section>