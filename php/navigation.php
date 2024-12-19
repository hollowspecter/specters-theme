<a href=<?php echo'"'.$base.'category/log"' ?>><p>❌ log</p></a>
<a href=<?php echo'"'.$base.'category/projects"' ?>><p>❌ projects</p></a>
<a href=<?php echo'"'.$base.'category/gamejams"' ?>><p>❌ gamejams</p></a>
<a href=<?php echo'"'.$base.'category/ttt"' ?>><p>❌ tattoos</p></a>
<a href=<?php echo'"'.$base.'category/photos"' ?>><p>❌ photos</p></a>
<a href=<?php echo'"'.$base.'category/about"' ?>><p>❌ about</p></a>
<a href=<?php echo'"'.$base.'category/questionmark"' ?>><p>❌ ???</p></a>

<!-- Static pages -->
<?php foreach ($staticContent as $staticPage): ?>
<li class="nav-item">
    <a class="nav-link" href="<?php echo $staticPage->permalink(); ?>">❌ <?php echo $staticPage->title(); ?></a>
</li>
<?php endforeach ?>