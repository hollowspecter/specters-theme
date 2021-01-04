<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>

<h1><?php echo $page->title(); ?></h1>
<p><i><?php echo $page->date(); ?></i></p>
<br/>
<div class="page-content">
    <?php echo $page->content(); ?>
</div>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>