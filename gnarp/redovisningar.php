<?php 
/* Page controller */
include(__DIR__ . "/includes/config.php");

$settings['page_title'] = "Startsida";

$settings['page_content'] .= "<section class='breadcrumbs'>\n" . $settings['sub_menu'] . "\n</section>\n";

$settings['page_content'] .= "\n<h2>Redovisningar</h2>\n";


/* Load Selected Assignement */
$settings['page_content'] .= loadContent();

function loadContent() {
	if(isset($_GET['id'])) {
		$selected_id = $_GET['id'];

		switch ($selected_id) {
	    case 1:
	        return include("moment/kmom1.php");
	        break;
	    case 2:
	        return include("moment/kmom2.php");
	        break;
	    case 3:
	        return include("moment/kmom3.php");
	        break;
	    case 4:
	        return include("moment/kmom4.php");
	        break;
	    case 5:
	        return include("moment/kmom5.php");
	        break;
	    case 6:
	        return include("moment/kmom6.php");
	        break;
	    case 7:
	        return include("moment/kmom7.php");
	        break;

	    default:
	    	return include("moment/kmom1.php");
	        break;
	    }
	} else {
		return include("moment/kmom1.php");
	        break;
	}

}



/* Render page */
include(GNARP_THEME_PATH);