<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
	<?php include(THEME_DIR_PHP.'head.php'); ?>
</head>
<body>

<!-- Header -->
<header>
	<!-- Load Bludit Plugins: Site Body begin -->
	<?php echo Theme::plugins('siteBodyBegin') ?>
</header>

<!-- Content -->
<main>
<?php
	// $WHERE_AM_I variable detects where the user is browsing
	// "page" = looking at a particular page
	// "home" = looking at the home page
	
	if ($WHERE_AM_I == 'page') {
		include(THEME_DIR_PHP.'page.php');
	} else {
		include(THEME_DIR_PHP.'home.php');
	}
?>
</main>

<!-- Footer -->
<footer>
<!-- TODO put in the footer here -->
</footer>
	<!-- Load plugins with the hook siteBodyEnd -->
	<?php Theme::plugins('siteBodyEnd'); ?>	
</body>
</html>
