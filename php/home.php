<!-- Show Static page content -->
<?php foreach ($staticContent as $page): ?>
<article>
<h2><?php echo $page->title(); ?></h2>
<div><?php echo $page->content(); ?></div>
</article>
<hr>
<?php endforeach; ?>

<!-- Show the Sticky Posts -->

<h2>Featured</h2>

<div class="card-collection">
	<?php foreach ($content as $page): ?>
	<?php if($page->type() == 'sticky'): ?>

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

	<?php else: ?>
	<?php break; ?>
	<?php endif; ?>
	<?php endforeach; ?>
</div>
