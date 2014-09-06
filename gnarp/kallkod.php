<?php 
/* Page controller */
include(__DIR__ . "/includes/config.php");

$settings['page_title'] = "Startsida";

/* Main Page Content */
$settings['page_content'] = "<h2>Källkod</h2>\n";

$source = new CSource();
$content = $source->View();

/* $content = include(__DIR__.'/includes/source.php'); */
$settings['page_content'] .= $content;

$settings['footer_content'] = "<p><strong><a href='https://github.com/mosbth/csource' target='_blank'>Source.php</a> är skapad av Mikael Roos.</strong></p>\n";
$settings['footer_content'] .= "<p>Av Mattias Dahlgren, 2014 - E-post: <a href='mailto:mattias.dahlgren@gnarp.se'>mattias.dahlgren@gnarp.se</a></p>";

/* Render page */
include(GNARP_THEME_PATH);
