<?php 
// get youtube video informations
$youtubeVideo   = get_field('youtubevideo');
$youtubeContent = get_field('youtubecontent');


// get header content informations
$contentNotification = get_field('contentnotification');
$contentTitle        = get_field('contenttitle');
$contentSubtitle     = get_field('contentsubtitle');
$contentDescription  = get_field('contentdescription');

?>


<header class="header">

<div class="grid-1160"><!-- start grid-1160 -->

    

<div class="header__content"><!-- start header__content -->


    <div class="header__content--flex">

        <div class="header__content__notification"><p><?php echo $contentNotification;?></p></div>

        <h1 class="header__title"><?php echo $contentTitle;?></h1>

         <span class="header__subtitle"><?php echo $contentSubtitle;?></span>
        
         <div class="header__content__description">
          
            <?php echo $contentDescription;?>  

        </div>
       
    </div>

 
<div class="header__video"><!-- start header__video -->

   
<div class="flex-grid"> <!-- start flex-grid -->

   
    <div class="col--2 header__opacity"> <!-- start col--2 -->

        <div class="header__video__content"><!-- start header__video__content -->
      
        <?php echo $youtubeContent;?>
    
        </div><!-- end header__video__content -->

    </div><!-- end col--2 -->


    
    <div class="col--2 flex-grid flex-grid--column"> <!-- start col--2 -->

     
            <div class="embed-container">

            <iframe width="560" height="315" data-src="<?php echo $youtubeVideo;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>   

  

</div> <!-- end col--2 -->
    

</div><!-- end flex-grid -->

                
</div><!-- end header__video -->

</div><!-- end header__content -->





</div><!-- end grid-1160 -->


</header>