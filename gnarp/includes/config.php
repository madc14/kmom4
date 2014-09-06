<?php
/*
* Config setting for Gnarp framework 
*
* @author: Mattias Dahlgren
*/

/* Activate error reporting */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly

/* Paths constants */
define('GNARP_INSTALL_PATH',  __DIR__);
define('GNARP_THEME_PATH', GNARP_INSTALL_PATH . '/theme/render.php');

/* Include bootstrapping functions */
include(GNARP_INSTALL_PATH . '/bootstrap.php');

/* Start session */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();

/* Settings array */
$settings = array();

/* General site setting 
* TODO: Move to databse
*/
$settings['sitename'] = "OOPHP - Mattias Dahlgren";
$settings['page_title'] = "";
$settings['title_divider'] = " - ";
$settings['stylesheet'] = "stilmall.css";
$settings['language'] = "sv";
$settings['description'] = "Projektsida för kursen DV1485 H14 Lp12 Databaser och objektorienterad prog i PHP";
$settings['favicon'] = "favicon.ico";
$settings['page_content'] = "";
$settings['main_menu'] = "";
$settings['sub_menu'] = "";
$settings['footer_content'] = "<p>Av Mattias Dahlgren, 2014 - E-post: <a href='mailto:mattias.dahlgren@gnarp.se'>mattias.dahlgren@gnarp.se</a></p>";

/* Autoload JavaScript from js folder. false = no, true = yes 
* When activated, copy .js-files to automatically add them to the html-pages.
* To insert into the head-section, copy to "head"-folder under themes/js - for bottom, use themes/js/bottom
*/
$settings['autoload_js'] = true;
$settings['load_head'] = "";
$settings['load_foot'] = "";

/* Load functions */
include(__DIR__ . '/theme/functions.php');

/* Load menu */
$settings['main_menu'] = loadMenu();

/* Load submenu */
$settings['sub_menu'] = loadSubMenu();

/* Load JavaScript - if requested in settings */
if($settings['autoload_js']) {
	$settings['load_head'] = loadJavaScriptHead();
	$settings['load_foot'] = loadJavaScriptFoot();
}

/* Autoload CSS-files, similar to js-files. Put in "css"-folder under themes.
* true = yes, false = no.
*/
$settings['autoload_css'] = true;
$settings['load_css'] = "";

/* Load CSS-files - if requested */
if($settings['autoload_css']) {
	$settings['load_css'] = loadCSS();
}

/* Google analytics */
$settings['google_analytics'] = true;
$settings['google_analytics_ua'] = "UA-54534033-1";


$source = new CSource();