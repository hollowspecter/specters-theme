<?php foreach ($content as $page): ?>
<h1><?php echo $page->title(); ?></h1>
<div><?php echo $page->content(); ?></div>
<hr>
<?php endforeach; ?>
