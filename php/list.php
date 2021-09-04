<?php

/* Prepare the page */

define ("TEMPLATE_LOG", "log");
define ("TEMPLATE_ALL", "all");
define ("TEMPLATE_CARD", "card");

$slug = $url->slug();
if ($WHERE_AM_I == 'category') {
    // Create the Category-Object
    $category = new Category($slug);

    $name = $category->name();
    $description = $category->description();
    $template = $category->template();

} else if ($WHERE_AM_I == 'tag') {
    $name = $slug;
    $description = "";
    $template = TEMPLATE_LOG;
}

/* Display page */

?>

<!-- Print the category name -->
<h1><?php echo $name; ?></h1>    
<p><?php echo $description; ?></p>
<br/>

<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>

<!-- Show all the pages -->
<?php foreach ($content as $page):
    $link = createPageLink($page);	    
?>

    <!-- Card Template -->
    <?php if($template == TEMPLATE_CARD): ?>
        <div class="card">
            <a href="<?php echo $link[0]; ?>" target="<?php echo $link[1] ?>">
                <h3><?php echo $page->title(); ?></h3>
                <div class="card-img" style=<?php echo "\"background-image: url('".$page->coverImage()."')\"" ?> title="<?php echo $page->custom(COVER_ALT); ?>"></div>
            </a>
            <p><?php echo $page->description(); ?></p>
        </div>

    <!-- All Template (just shows everything) -->
    <?php elseif($template == TEMPLATE_ALL): ?>
        <article>
            <h2><?php echo $page->title(); ?></h2>
            <div><?php echo $page->content(); ?></div>
        </article>
        <hr>

    <!-- Default: Log Style -->
    <?php else: ?>
        <div class="list-log">
            <a href="<?php echo $link[0]; ?>"><?php echo $page->title()?> (<?php echo $page->date(); ?>)</a>
            <?php if($page->description()!=""): ?>
                <p><?php echo '-> '.$page->description(); ?></p>
            <?php endif; ?>
        </div>
        <hr>
    <?php endif; ?>

<?php endforeach; ?>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>

<!-- Pagination -->
<?php if (Paginator::numberOfPages()>1): ?>
<nav class="paginator">
	<ul>
		<!-- Previous button -->
		<?php if (Paginator::showPrev()): ?>
		<li class="page-item mr-2">
			<a class="page-link" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1">&#9664; <?php echo $L->get('Previous'); ?></a>
		</li>
		<?php endif; ?>

		<!-- Home button -->
		<li class="page-item <?php if (Paginator::currentPage()==1) echo 'disabled' ?>">
			<a class="page-link" href="<?php echo Theme::siteUrl() ?>"><?php echo $L->get('Home'); ?></a>
		</li>

		<!-- Next button -->
		<?php if (Paginator::showNext()): ?>
		<li class="page-item ml-2">
			<a class="page-link" href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('Next'); ?> &#9658;</a>
		</li>
		<?php endif; ?>
	</ul>
</nav>
<?php endif ?>
