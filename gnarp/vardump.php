<?php 
/* Page controller */
include(__DIR__ . "/includes/config.php");

$settings['page_title'] = "Var dump";

/* Main Page Content */
$settings['page_content'] = "<h2>Värden i variabeln &#36;settings</h2>\n";
$settings['page_content'] .= dump($settings);
/* Render page */
include(GNARP_THEME_PATH);