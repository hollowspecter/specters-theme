<?php

define ("TEMPLATE_LOG", "log");
define ("TEMPLATE_ALL", "all");
define ("TEMPLATE_CARD", "card");

// Get the category key from the URL
$categoryKey = $url->slug();

// Create the Category-Object
$category = new Category($categoryKey);
?>

<!-- Print the category name -->
<h1><?php echo $category->name(); ?></h1>    
<p><?php echo $category->description(); ?></p>
<br/>

<!-- Show all the pages -->
<?php foreach ($content as $page):
    $link = createPageLink($page);	    
?>

    <!-- Card Template -->
    <?php if($category->template() == TEMPLATE_CARD): ?>
        <div class="card">
            <a href="<?php echo $link[0]; ?>" target="<?php echo $link[1] ?>">
                <h3><?php echo $page->title(); ?></h3>
                <div class="card-img" style=<?php echo "\"background-image: url('".$page->coverImage()."')\"" ?>></div>
            </a>
            <p><?php echo $page->description(); ?></p>
        </div>

    <!-- All Template (just shows everything) -->
    <?php elseif($category->template() == TEMPLATE_ALL): ?>
        <article>
            <h2><?php echo $page->title(); ?></h2>
            <div><?php echo $page->content(); ?></div>
        </article>
        <hr>

    <!-- Default: Log Style -->
    <?php else: ?>
        <div class="list-log">
            <a href=<?php echo '"'.$page->permalink().'"'; ?>><?php echo $page->title()?> (<?php echo $page->date(); ?>)</a>
            <?php if($page->description()!=""): ?>
                <p><?php echo '-> '.$page->description(); ?></p>
            <?php endif; ?>
        </div>
        <hr>
    <?php endif; ?>

<?php endforeach; ?>