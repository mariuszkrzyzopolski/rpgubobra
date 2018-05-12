<?php

session_start();

?>

<!DOCTYPE HTML>

<html lang="pl">

<head>

	<meta charset="utf-8" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	

<title>RPG u Bobra</title>

	

	<meta name="description" content="Strona o tematyce rpg i planszówek, stworzona na potrzeby zgromadzenia i zarządzania kartami postaci moich graczy" />

	<meta name="keywords" content="rpg,planszowki,wiedzmin,skyrim,gra o tron,horror w Arkham,boardgames,roleplaying games" />

	<meta name="robots" content="nofollow">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="script.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="zbior.css">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Fira+Sans+Extra+Condensed|Josefin+Sans|Slabo+27px|Shadows+Into+Light+Two&amp;subset=latin-ext" rel="stylesheet">

    </head>

<body onload="zegarek();">

<div id="container">

	<?php include 'naglowek.php' ;?>

	<?php include 'menu.php' ;?>

	<div id="main">

	<div>

	<b>Zbiór posiadanych przez nas gier i podręczników:</b><br>

		<a href="horror.php" class="button animacja">Horror w Arkham</a>

		<a href="rpg.php" class="button animacja">RPG</a>

		<a href="arena.php" class="button animacja">MtG Arena of the Planeswalkers</a>

		<a href="dawne.php" class="button animacja">Gry dawne</a>

	</div>

	</div>

	<?php include 'reklama.php';?>

 	<?php include 'stopka.php';?>

 	</div>
</body>

</html>