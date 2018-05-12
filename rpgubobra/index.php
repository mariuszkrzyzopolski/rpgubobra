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

         <script src="slajder.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="slajder.css">	

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Fira+Sans+Extra+Condensed|Josefin+Sans|&amp;subset=latin-ext" rel="stylesheet">

</head>



<body onload="zegarek();slajder();">



<div id="container">

	<?php include 'naglowek.php' ?>

	<?php include 'menu.php' ?>

	<div id="main">

	<div id="cont-slajder">

		<a href="skonczone.php"  class="slajd fade">

			<img src="grafiki/kostka.jpg">

			<div class="text">Kiedy nastepna sesja?</div>

		</a>

		<a href="zbior.php" class="slajd fade">

			<img src="grafiki/beszamel.jpg">

			<div class="text">Najnowszy nabytek</div>

		</a>



		<a href="wiedzmin-fabula.php" class="slajd fade">

			<img src="grafiki/legolas.jpg">

			<div class="text">Co sie stało z Figitzem Merluzzo?</div>

		</a>

		<a href="changelog.php" class="slajd fade">

			<img src="grafiki/changelog.png">

			<div class="text">Co zmieniło się ostatnio na stronie?</div>

		</a>

	</div>

	</div>

	<?php include 'reklama.php';?>

 	<?php include 'stopka.php';?>

</div>


</body>

</html>