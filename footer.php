<?php 
	$phone 		= get_sub_field('phone_number', 'option');
	$email 		= get_sub_field('email', 'option');
	$address 	= get_sub_field('address', 'option');
	$footerLogo	= get_sub_field('footer_logo', 'option');
	$copyright 	= get_sub_field('copyright', 'option');
?>

	<footer class="footer">

		<div class="contact-info">
			<a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
			<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
		</div>

		<div class="address-info">
			<p><?php echo $address; ?></p>
		</div>		

		<figure class="logo logo--footer">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo $footerLogo['url']; ?>" alt="<?php echo $footerLogo['alt']; ?>">
			</a>
		</figure>

		<small class="footer__copyright"><?php echo $copyright; ?></small>

		<div class="footer__menu">
			<ul class="footer__menu-list">
				<li class="footer__menu-item">
					<a href="">Impressum</a>
				</li>

				<li class="footer__menu-item">
					<a href="">Datenschutzerklärung</a>
				</li>
			</ul>
		</div>

	</footer>
<!-- =======================================================================
               PAGE STRUCTURE:= end footer
======================================================================= -->



	<script async src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>



<?php wp_footer();?>	

</body>
	
</html>
