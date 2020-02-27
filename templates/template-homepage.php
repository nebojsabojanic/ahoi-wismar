<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>


<!-- =============================================================================
                           PAGE STRUCTURE:= start page
=============================================================================- -->
	<div class="page">


	   <!-- Start Section-1
	   ================================================== -->
	   <?php include('home/section-1.php');?>
	
	   <!-- Start Section-2
	   ================================================== -->
	   <?php include('home/section-2.php');?>
	   
	   <!-- Start Section-3
	   ================================================== -->
	   <?php include('home/section-3.php');?>

	   <!-- Start Section-4
	   ================================================== -->
	   <?php include('home/section-4.php');?>
	   
	   <!-- Start Section-5
	   ================================================== -->
	   <?php include('home/section-5.php');?>
	   
	   <!-- Start Section-6
	   ================================================== -->
	   <?php include('home/section-6.php');?>

	   <!-- Start Section-7
       ================================================== -->
	   <?php include('home/section-7.php');?>


</div>

<!-- =============================================================================
                           PAGE STRUCTURE:= end page
=============================================================================- -->

	
<?php endwhile; ?>

<?php get_footer(); ?>