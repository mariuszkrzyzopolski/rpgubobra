<?php

/*

session_start();

if (!isset($_SESSION['login_flag']))

{

	//ograniczenie dostepu

	header('Location: logowanie.php');

	exit();

}

*/

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

	<link rel="stylesheet" type="text/css" href="bkarta.css">

	<!-- czcionka z google font -->

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Fira+Sans+Extra+Condensed|Josefin+Sans&amp;subset=latin-ext" rel="stylesheet">

    </head>

<body onload="zegarek();">

<div id="container">

<?php include 'naglowek.php' ?>

<?php include 'menu.php' ?>

	<div id="main">

	<p>Karta w trakcie tworzenia. Obecny stan - brak dostępnego pierwowzoru</p>

    </div>

<?php include 'reklama.php';?>

<?php include 'stopka.php';?>

    </div>

</body>

</html>