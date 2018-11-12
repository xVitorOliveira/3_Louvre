<!DOCTYPE html>
<html>
	<head>
        <title>Infos Pratiques</title>
		<meta charset="utf-8">
		<meta name="description" content="3.Louvre">
		<link rel="icon"       href="imgs/logo.png">
		<link rel="stylesheet" href="css/style.css">
		<?php

		$page_name = basename($_SERVER['PHP_SELF']);
		
		if ($page_name == "index.php")
		{
			echo '<link rel="stylesheet" href="css/index.css">';
		}
		else if ($page_name == "quartier.php")
		{
			echo '<link rel="stylesheet" href="css/quartier.css">';
		}
		else if ($page_name == "culture_loisirs.php")
		{
			echo '<link rel="stylesheet" href="css/culture_loisirs.css">';
		}
		else if ($page_name == "infos_pratiques.php")
		{
			echo '<link rel="stylesheet" href="css/infos_pratiques.css">';
		}
		else if ($page_name == "evenements.php")
		{
			echo '<link rel="stylesheet" href="css/evenements.css">';
		}
		else if ($page_name == "louvre.php")
		{
			echo '<link rel="stylesheet" href="css/louvre.css">';
		}

		?>
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    </head>