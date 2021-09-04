<!-- Social Networks -->
<?php foreach (Theme::socialNetworks() as $key=>$label): ?>
    <a class="nav-link" href="<?php echo $site->{$key}(); ?>" target="_blank">
        <img class="nav-svg-icon" src="<?php echo DOMAIN_THEME.'img/'.$key.'.svg' ?>" alt="<?php echo $label ?>" />
    </a>
<?php endforeach; ?>

<!-- FIXME: until I've figured out how to extend the social media tab, I have to add more links like this -->
<a class="nav-link" href="https://hollowspecter.itch.io/" target="_blank">
    <img class="nav-svg-icon" src="<?php echo DOMAIN_THEME.'img/itch-dot-io.svg' ?>" alt="itch.io" />
</a>
<a class="nav-link" href="rss.xml" target="_blank">
    <img class="nav-svg-icon" src="<?php echo DOMAIN_THEME.'img/rss.svg' ?>" alt="rss" />
</a>

<!-- Licenses -->
<p>Copyright &copy; 2021 by <a href=<?php echo $base; ?>>Finley Baguio</a>.<br>
Text and Media under <a href="https://creativecommons.org/licenses/by/4.0/" targte="_blank">CC BY 4.0</a></p>