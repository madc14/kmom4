<?php
/**
* Render content to theme
*
*/

// Extract the data array to variables for easier access in the template files.
extract($settings);

/* Call Header Content */
include("header.php");

/* Call Main Content */
include("main.php");

/* Call Footer Content */
include("footer.php");

?>