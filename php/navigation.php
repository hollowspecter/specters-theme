
<p>Link1</p>
<p>Link2</p>
<p>Link2</p>
<p>Link2</p>

<!-- Static pages -->
<?php foreach ($staticContent as $staticPage): ?>
<li class="nav-item">
    <a class="nav-link" href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
</li>
<?php endforeach ?>