<?php

/*
 * Define constants here for custom fields that are set in bludit.
 * Make sure they match.
 * Go to Bludit-Adminpanel/Settings/General/CustomFields
 */

define ("IS_EXTERNAL_LINK", "isExternalLink");
define ("EXTERNAL_LINK", "externalLink");

// Tags
define ("TAG_HOME", "home");
define ("TAG_FEATURE", "featured");

// Delete those lines when going into release
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
 * Utility functions
 */

// returns an array with the link and link target
function createPageLink($page){
    $return = array($page->permalink(), "");
    if ($page->custom(IS_EXTERNAL_LINK)) {
        $return[0] = $page->custom(EXTERNAL_LINK);
        $return[1] = "_blank";
    }
    return $return;
}

?>