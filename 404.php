<?php get_header('404'); ?>

<?php 
	$logo 		= get_field('logo', 'option');
?>

	<div class="page-404 d-flex d-jcc d-aic d-column">

		<figure class="logo logo--header">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
			</a>
		</figure>

		<div class="entry-header">
			<h1 class="entry-title">Seite nicht gefunden</h1>
		</div>

		<div class="entry-content">
			<p>Sind Sie sicher, dass Sie die richtige Adresse eingegeben haben?</p>
			<p>Es ist möglicherweise besser, wenn Sie zur <a href="<?php echo home_url(); ?>">Startseite</a> zurückkehren und auf den Inhalt klicken, der Sie interessiert.</p>
		</div>

	</div>

<?php get_footer('404'); ?>