    <?php 
        require"init.inc.php";
        session_start();
        if(isset($_POST["lang"])){
            $_SESSION['lang']=$_POST["lang"];
        }
    ?>
    <meta charset="utf-8">
    <meta name="description" content="3.Louvre">
    <link rel="icon"       href="imgs/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
<!DOCTYPE html>
<html>
	<head>
        <title>Quarier du Louvre</title>
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
			echo '<script type="text/javascript" src="JS/infos_pratiques.js"></script>';
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
