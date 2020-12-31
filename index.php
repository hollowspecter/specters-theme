<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
	<?php include(THEME_DIR_PHP.'head.php'); ?>
</head>
<body>
	<!-- Load Bludit Plugins: Site Body begin -->
	<?php echo Theme::plugins('siteBodyBegin') ?>


	<?php foreach ($content as $page): ?>
	<h1><?php echo $page->title(); ?></h1>
	<div><?php echo $page->content(); ?></div>
	<hr>
	<?php endforeach; ?>

	<!-- Load plugins with the hook siteBodyEnd -->
	<?php Theme::plugins('siteBodyEnd'); ?>	

</body>
</html>
