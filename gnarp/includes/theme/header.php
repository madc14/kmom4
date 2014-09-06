<!DOCTYPE html>
<html lang="<?= $settings['language'] ?>">
<head>
	<title><?= $settings['sitename'] ?></title>
	<meta charset="UTF8">
	<meta name="description" content="<?= $settings['description'] ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="css/<?= $settings['stylesheet'] ?>" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
	<link rel="icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
	<?php
		// Output autoloaded CSS-files
		echo $settings['load_css'];
		
		// Output autoloaded JS-files
		echo $settings['load_head'];
	?>
</head>
<body>
	<header id="mainheader">
		<div class="container">
			<a href="index.php" title="Tillbaks till startsidan"><h1><?= $settings['sitename'] ?></h1></a>

			<?= $settings['main_menu'] ?>
		</div><!-- /container -->
	</header>

	<div class="container">
		<div class="main">
