<?php get_header('404'); ?>

	<div class="page-404 d-flex d-column d-jcc">
		<?php $logo = get_field('logo', 'option'); ?>

		<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">

		<div class="entry-header">
			<h1 class="entry-title">There's a problem.</h1>
		</div>
		<div class="entry-content">
			<p>There appears to be a problem. The page you were looking for no longer exists (or never existed). This could be due to a number of reasons: The page could have been deleted or moved, you could have clicked a bad link or mistyped the address.</p>
		</div>
	</div>

<?php get_footer('404'); ?>