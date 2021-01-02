<!-- Show all pages related to home (tagged with TAG_HOME) -->
<?php
	$items = getTags();
	foreach ($items as $tag) {
		if ($tag->name() == TAG_HOME) {
			$homeTag = $tag;
			continue;
		}
		if ($tag->name() == TAG_FEATURE) {
			$featureTag = $tag;
			continue;
		}
	}

	foreach ($homeTag->pages() as $pageKey): 
		$page = new Page($pageKey); ?>

		<article>
		<h2><?php echo $page->title(); ?></h2>
		<div><?php echo $page->content(); ?></div>
		</article>
		<hr>

	<?php endforeach;
?>

<!-- Show all featured pages (tagged with TAG_FEATURE) -->

<h2>Featured</h2>
<div class="card-collection">
	<?php foreach ($featureTag->pages() as $pageKey): 
		$page = new Page($pageKey); ?>
		<?php
			// let's fetch the correct link
			$link = $page->permaLink();
			$target = "";
			if ($page->custom(IS_EXTERNAL_LINK)) {
				$link = $page->custom(EXTERNAL_LINK);
				$target = "_blank";
			}
		?>

		<div class="card">
			<a href="<?php echo $link; ?>" target="<?php echo $target?>">
				<h3><?php echo $page->title(); ?></h3>
				<div class="card-img" style=<?php echo "\"background-image: url('".$page->coverImage()."')\"" ?>></div>
			</a>
			<p><?php echo $page->description(); ?></p>
		</div>
	<?php endforeach; ?>
</div>
