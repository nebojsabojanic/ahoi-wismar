<!-- =============================================================================
                           PAGE STRUCTURE:= start footer
=============================================================================- -->
   <footer class="footer">
		<?php 
			// get logo footer
			$logoFooter = get_field( 'footer-logo-blog', 'option');
			
			// get footer description
			$footerDescription = get_field('footer-description','option');
		?>

		<a href="<?php echo get_home_url(); ?>"><img title="<?php echo $logoFooter['title'];?>" data-src="<?php echo $logoFooter['url'];?>" alt="<?php echo $logoFooter['alt'];?>" src="<?php echo $logoFooter['url'];?>"></a>
		<div class="footer__copy"><?php echo $footerDescription;?></div>

	</footer>
	
	<!-- =============================================================================
                           PAGE STRUCTURE:= end footer
    =============================================================================- -->

	<div class="go-top">
                
				<div class="arrow-up">
	
				<span class="left-arm"></span>
				<span class="right-arm"></span>
	
				</div>
			
			</div>
			<script async src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
	<script type="text/javascript">
		WebFontConfig = {
			google: { families: [ 'Montserrat|Hind:300,400,500,400i,,600' ] }
		};

		(function() {
			var wf = document.createElement('script');
			wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script>

<?php wp_footer();?>	

</body>
	
</html>
