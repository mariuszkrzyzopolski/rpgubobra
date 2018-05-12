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

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Fira+Sans+Extra+Condensed|Josefin+Sans|Slabo+27px&amp;subset=latin-ext" rel="stylesheet">

    </head>

<body onload="zegarek();">

<div id="container">

	<?php include 'naglowek.php' ;?>

	<?php include 'menu.php' ;?>

	<div id="main">

			<div class="rpg-galeria">

                            <img class="rpg-zdjecia" src="grafiki/hnefentafl.jpg">

                            <img class="rpg-zdjecia" src="grafiki/hnefentafl2.jpg">

			</div>

			<div class="rpg-galeria">

				<img class="rpg-zdjecia" src="grafiki/brak.jpg">

				<img class="rpg-zdjecia" src="grafiki/brak.jpg">

			</div>

		<div class="opis rpg-galeria">

			<b>Hnefentafl</b><br>

			Skandynawska gra planszowa z rodziny gry taflowatych (W wolnym tłumaczeniu tafl to stół a hnefen to król) polegająca na wyprowadzeniu króla z planszy lub z drugiej strony, na jego pojmaniu. Zasady dostępne <a href="http://www.yggdrasillthing.fora.pl/gry-i-zabawy,42/hnefatafl,213.html">tutaj</a>

			<br>		

		</div>

		<div class="opis rpg-galeria">

			<b>Inne</b><br>

			<br>

		</div>

		

	</div>

	<?php include 'reklama.php';?>

 	<?php include 'stopka.php';?>

 	</div>

</body>

</html>