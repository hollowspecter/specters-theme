<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>

<!-- Display all categories -->
<h1>Categories</h1>
<ul class="ul-categories">
    <?php
    $items = getCategories();
    foreach ($items as $item): ?>
        <li>
            <a href="<?php echo $item->permalink(); ?>"><?php echo $item->name() . '(' . count($item->pages()) . ')'; ?></a>
        </li>
    <?php endforeach; ?>
</ul>

<!-- Display all tags -->
<h1>Tags</h1>
<ul class="ul-tags">
    <?php
    $items = getTags();
    foreach ($items as $item): ?>
        <li>
            <a href="<?php echo $item->permalink(); ?>"><?php echo $item->name() . '(' . count($item->pages()) . ')'; ?></a>
        </li>
    <?php endforeach; ?>
</ul>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>