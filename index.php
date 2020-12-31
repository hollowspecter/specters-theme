<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
	<?php include(THEME_DIR_PHP.'head.php'); ?>
</head>
<body>
	<!-- Load Bludit Plugins: Site Body begin -->
	<?php echo Theme::plugins('siteBodyBegin') ?>

	<?php if ($WHERE_AM_I=='page'): ?>
		<p>The user is watching a particular page</p>
	<?php elseif ($WHERE_AM_I=='home'): ?>
		<p>The user is watching the home page</p>
		<?php include(THEME_DIR_PHP.'home.php'); ?>
	<?php endif ?>

	<!-- Load plugins with the hook siteBodyEnd -->
	<?php Theme::plugins('siteBodyEnd'); ?>	

</body>
</html>
