<?php

session_start();

//dzieki sesji menu.php moze pokazac login

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

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Fira+Sans+Extra+Condensed|Josefin+Sans&amp;subset=latin-ext" rel="stylesheet">

    </head>

<body onload="zegarek();">

<div id="container">

	<?php include 'naglowek.php' ?>

	<?php include 'menu.php' ?>

	<div id="main">

	<h4>Lista rpg ktore zostały zakończone lub zawieszone:</h4>

	<ul type="circle">

		<li>wiedzmin - sesja TM</li>

		<li>alternatywna wersja historii z duza domieszka fantasy-urodzinowo</li>

		<li>Adro</li>

	</ul>

	<h4>Lista rpg ktore są nadal prowadzone:</h4>

	<ul type="">

		<li>wiedzmin - sesja kultystyczno-Novigradzko-studencka</li>

		<li>Skyrim</li>

		<li>Got</li>

		<li>Elbing</li>

	</ul>

	Rekrutacja:[zamknieta]<br>

	Następna sesja: Po 12 czerwca

	</div>

	<?php include 'reklama.php';?>

 	<?php include 'stopka.php';?>

 	</div>

</body>

</html>