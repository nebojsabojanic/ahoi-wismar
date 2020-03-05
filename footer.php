<?php 
	$phone 		= get_field('phone_number', 'option');
	$email 		= get_field('email', 'option');
	$address 	= get_field('address', 'option');
	$footerLogo	= get_field('footer_logo', 'option');
	$copyright 	= get_field('copyright', 'option');
?>

	<footer class="footer">

		<div class="grid-1340 d-flex d-column">

			<div class="footer__top d-flex d-jcsb">
				<div class="footer__contact-info">
					<a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
					<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
				</div>

				<div class="footer__address-info">
					<p><?php echo $address; ?></p>
				</div>
			</div>	

			<figure class="logo logo--footer">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo $footerLogo['url']; ?>" alt="<?php echo $footerLogo['alt']; ?>">
				</a>
			</figure>

			<div class="footer__bottom d-flex d-jcsb">
				<small class="footer__copyright">&copy;<?php echo date('Y');?> <?php echo $copyright; ?></small>

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
			</div>

		</div><!-- End: grid-1340 -->

	</footer>
<!-- =======================================================================
               PAGE STRUCTURE:= end footer
======================================================================= -->



	<script async src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>



<?php wp_footer();?>	

</body>
	
</html>
