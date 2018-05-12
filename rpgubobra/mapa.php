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

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Fira+Sans+Extra+Condensed|Josefin+Sans|&amp;subset=latin-ext" rel="stylesheet">

    </head>

<body onload="zegarek();">

<div id="container">

<?php include 'naglowek.php' ?>

	<?php include 'menu.php' ?>

	<div id="main">

   	<ul>

   		<li>Stronga główna</li>

   		<li>nagłówek

   			<ul>

   				<li>wiedzmin-karty postaci</li>

   				<li>skyrim-karty postaci</li>

   				<li>got-karty postaci</li>

   				<li>Elbing-karty postaci(nieuzupełnione)</li>

   				<li>lista skonczonych rpg</li>

   			</ul>

   		</li>

   		<li>

   			menu

   			<li>logowanie/rejestracja</li>

   			<li>zbiór posiadanych przez nas gier/akcesoriów

   			<ul>

   				<li>Horror z Arkcham

   				<ul><li>Dodatki</li></ul>

   				</li>

   				<li>rpg

   				   <ul>

              <li>

              fabuly

                  <ul>

                    <li>

                        Wiedzmin Novigradzo-studencki

                        <ul><li>Mapa sesji</li></ul>

                    </li>

                    <li>Wiedzmin Tm(zaczęty)</li>

                    <li>Skyrim(zaczęty)</li>

                  </ul>

              </li>

             </ul>

   				</li>

   				<li>Arena of the planeswalkers

   				<ul><li>mtg</li></ul>

   				</li>

                                <li>

                                    Gry dawne

                                    <ul>

                                        <li>Hnefentafl</li>

                                    </ul>

                                </li>

   			</ul>

   			</li>

   			<li>cmentarz postaci z rpg</li>

   			<li>mapa</li>

   			<li>kontakt z autorem</li>

   		</li>

   	</ul>

	</div>

	<?php include 'reklama.php';?>

 <?php include 'stopka.php';?>

 </div>

</body>

</html>