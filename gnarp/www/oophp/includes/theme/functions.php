<?php
/**
* Main functions for the theme 
*
*/

/* Menu Generate Class */
class CNavigation {
  public static function GenerateMenu($items) {

    $html = "<nav>\n";
    $html .= "<ul>\n";
    foreach($items as $item) {
      $html .= "<li><a href='{$item['url']}'";

      /* Check if url is the same as current filename -> current page */
      if($item['url'] == basename($_SERVER['PHP_SELF'])) {
      	$html .= " class='current'";
      }

      /* Check if the id is the same as GET id */
      if(isset($_GET['id']) && $_GET['id'] == $item['id']) {
        $html .= " class='current'";
      }

      $html .= ">";
      $html .= "{$item['text']}</a></li>\n";
    }
    $html .= "</ul>\n";
    $html .= "</nav>\n";
    return $html;
  }
}; 

/* Main Menu Loader */
function loadMenu() {
	return include("main_menu.php");
}

/* Sub Menu Loader */
function loadSubMenu() {
	return include("sub_menu.php");
}

/* Autoload JavaScript */
function loadJavaScriptHead() {
  $file_string = "";
  foreach (glob("includes/theme/js/top/" . "*.js") as $filename) {
    $file_string .= "\n<script src='" . $filename . "'></script>\n";
  }

  return $file_string;
}

function loadJavaScriptFoot() {
  $file_string = "";
  foreach (glob("includes/theme/js/bottom/" . "*.js") as $filename) {
    $file_string .= "\n<script src='" . $filename . "'></script>\n";
  }

  return $file_string;
}