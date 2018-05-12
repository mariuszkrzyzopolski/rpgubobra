<?php

session_start();

if (!isset($_SESSION['login_flag']))

{

	//ograniczenie dostepu

	header('Location: logowanie.php');

	exit();

}

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

	<link rel="stylesheet" type="text/css" href="skarta.css">

	<!-- czcionka z google font -->

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Fira+Sans+Extra+Condensed|Josefin+Sans&amp;subset=latin-ext" rel="stylesheet">

    </head>

<body onload="zegarek();">

<div id="container">

<?php include 'naglowek.php' ?>

	<?php include 'menu.php' ?>

	<div id="main">

	<form action="sky.php" method="post">

	<div id="charakter">

	<ul>

		<li>Imie<input type="text" name="imie"></li>

		<li>Koncept<input type="text" name="koncepcja"></li>

		<li>Wyglad<input type="text" name="wyglad"></li>

		</ul>

	</div>

		<div id="cechy">

		<ul>

			<li><b>Duch</b>: 4<input type="radio" name="duch" value="4">6<input type="radio" name="duch" value="6">8<input type="radio" name="duch" value="8">10<input type="radio" name="duch" value="10">12<input type="radio" name="duch" value="12"></li>

			<li>odwaga 4<input type="radio" name="odwaga" value="4">6<input type="radio" name="odwaga" value="6">8<input type="radio" name="odwaga" value="8">10<input type="radio" name="odwaga" value="10">12<input type="radio" name="odwaga" value="12"></li>

			<li>przekonywanie 4<input type="radio" name="przekonywanie" value="4">6<input type="radio" name="przekonywanie" value="6">8<input type="radio" name="przekonywanie" value="8">10<input type="radio" name="przekonywanie" value="10">12<input type="radio" name="przekonywanie" value="12"></li>

			<li>zastraszanie 4<input type="radio" name="zastraszanie" value="4">6<input type="radio" name="zastraszanie" value="6">8<input type="radio" name="zastraszanie" value="8">10<input type="radio" name="zastraszanie" value="10">12<input type="radio" name="zastraszanie" value="12"></li>

			<br/>

			<li><b>Siła</b>: 4<input type="radio" name="sila" value="4">6<input type="radio" name="sila" value="6">8<input type="radio" name="sila" value="8">10<input type="radio" name="sila" value="10">12<input type="radio" name="sila" value="12"></li>

			<li>wspinaczka: 4<input type="radio" name="wspinaczka" value="4">6<input type="radio" name="wspinaczka" value="6">8<input type="radio" name="wspinaczka" value="8">10<input type="radio" name="wspinaczka" value="10">12<input type="radio" name="wspinaczka" value="12"></li>

			<br/>

			<li><b>Spryt</b>: 4<input type="radio" name="spryt" value="4">6<input type="radio" name="spryt" value="6">8<input type="radio" name="spryt" value="8">10<input type="radio" name="spryt" value="10">12<input type="radio" name="spryt" value="12"></li>

			<li>hazard: 4<input type="radio" name="hazard" value="4">6<input type="radio" name="hazard" value="6">8<input type="radio" name="hazard" value="8">10<input type="radio" name="hazard" value="10">12<input type="radio" name="hazard" value="12"></li>

			<li>leczenie: 4<input type="radio" name="leczenie" value="4">6<input type="radio" name="leczenie" value="6">8<input type="radio" name="leczenie" value="8">10<input type="radio" name="leczenie" value="10">12<input type="radio" name="leczenie" value="12"></li>

			<li>przetrwanie: 4<input type="radio" name="przetrwanie" value="4">6<input type="radio" name="przetrwanie" value="6">8<input type="radio" name="przetrwanie" value="8">10<input type="radio" name="przetrwanie" value="10">12<input type="radio" name="przetrwanie" value="12"></li>

			<li>reperowanie: 4<input type="radio" name="reperowanie" value="4">6<input type="radio" name="reperowanie" value="6">8<input type="radio" name="reperowanie" value="8">10<input type="radio" name="reperowanie" value="10">12<input type="radio" name="reperowanie" value="12"></li>

			<li>spostrzegawczosc: 4<input type="radio" name="spostrzegawczosc" value="4">6<input type="radio" name="spostrzegawczosc" value="6">8<input type="radio" name="spostrzegawczosc" value="8">10<input type="radio" name="spostrzegawczosc" value="10">12<input type="radio" name="spostrzegawczosc" value="12"></li>

			<li>tropienie: 4<input type="radio" name="tropienie" value="4">6<input type="radio" name="tropienie" value="6">8<input type="radio" name="tropienie" value="8">10<input type="radio" name="tropienie" value="10">12<input type="radio" name="tropienie" value="12"></li>

			<li>wyszukiwanie: 4<input type="radio" name="wyszukiwanie" value="4">6<input type="radio" name="wyszukiwanie" value="6">8<input type="radio" name="wyszukiwanie" value="8">10<input type="radio" name="wyszukiwanie" value="10">12<input type="radio" name="wyszukiwanie" value="12"></li>

			<li>wypytywanie: 4<input type="radio" name="wypytywanie" value="4">6<input type="radio" name="wypytywanie" value="6">8<input type="radio" name="wypytywanie" value="8">10<input type="radio" name="wypytywanie" value="10">12<input type="radio" name="wypytywanie" value="12"></li>

			<li>wysmiewanie: 4<input type="radio" name="wysmiewanie" value="4">6<input type="radio" name="wysmiewanie" value="6">8<input type="radio" name="wysmiewanie" value="8">10<input type="radio" name="wysmiewanie" value="10">12<input type="radio" name="wysmiewanie" value="12"></li>

			<li>wiedza: 4<input type="radio" name="wiedza" value="4">6<input type="radio" name="wiedza" value="6">8<input type="radio" name="wiedza" value="8">10<input type="radio" name="wiedza" value="10">12<input type="radio" name="wiedza" value="12"></li>

			<li>wiedzaz: 4<input type="radio" name="wiedzaz" value="4">6<input type="radio" name="wiedzaz" value="6">8<input type="radio" name="wiedzaz" value="8">10<input type="radio" name="wiedzaz" value="10">12<input type="radio" name="wiedzaz" value="12"></li>

			<li>wiedzao: 4<input type="radio" name="wiedzao" value="4">6<input type="radio" name="wiedzao" value="6">8<input type="radio" name="wiedzao" value="8">10<input type="radio" name="wiedzao" value="10">12<input type="radio" name="wiedzao" value="12"></li><br>

			<li><b>Wigor</b>: 4<input type="radio" name="wigor" value="4">6<input type="radio" name="wigor" value="6">8<input type="radio" name="wigor" value="8">10<input type="radio" name="wigor" value="10">12<input type="radio" name="wigor" value="12"></li><br>

			<li><b>Zręczność</b>: 4<input type="radio" name="zrecznosc" value="4">6<input type="radio" name="zrecznosc" value="6">8<input type="radio" name="zrecznosc" value="8">10<input type="radio" name="zrecznosc" value="10">12<input type="radio" name="zrecznosc" value="12"></li>

			<li>jezdziectwo: 4<input type="radio" name="jezdziectwo" value="4">6<input type="radio" name="jezdziectwo" value="6">8<input type="radio" name="jezdziectwo" value="8">10<input type="radio" name="jezdziectwo" value="10">12<input type="radio" name="jezdziectwo" value="12"></li>

			<li>plywanie: 4<input type="radio" name="plywanie" value="4">6<input type="radio" name="plywanie" value="6">8<input type="radio" name="plywanie" value="8">10<input type="radio" name="plywanie" value="10">12<input type="radio" name="plywanie" value="12"></li>

			<li>rzucanie: 4<input type="radio" name="rzucanie" value="4">6<input type="radio" name="rzucanie" value="6">8<input type="radio" name="rzucanie" value="8">10<input type="radio" name="rzucanie" value="10">12<input type="radio" name="rzucanie" value="12"></li>

			<li>skradanie: 4<input type="radio" name="skradanie" value="4">6<input type="radio" name="skradanie" value="6">8<input type="radio" name="skradanie" value="8">10<input type="radio" name="skradanie" value="10">12<input type="radio" name="skradanie" value="12"></li>

			<li>strzelanie: 4<input type="radio" name="strzelanie" value="4">6<input type="radio" name="strzelanie" value="6">8<input type="radio" name="strzelanie" value="8">10<input type="radio" name="strzelanie" value="10">12<input type="radio" name="strzelanie" value="12"></li>

			<li>walka: 4<input type="radio" name="walka" value="4">6<input type="radio" name="walka" value="6">8<input type="radio" name="walka" value="8">10<input type="radio" name="walka" value="10">12<input type="radio" name="walka" value="12"></li>

			<li>wlamywanie: 4<input type="radio" name="wlamywanie" value="4">6<input type="radio" name="wlamywanie" value="6">8<input type="radio" name="wlamywanie" value="8">10<input type="radio" name="wlamywanie" value="10">12<input type="radio" name="wlamywanie" value="12"></li>

			<li>zeglowanie: 4<input type="radio" name="zeglowanie" value="4">6<input type="radio" name="zeglowanie" value="6">8<input type="radio" name="zeglowanie" value="8">10<input type="radio" name="zeglowanie" value="10">12<input type="radio" name="zeglowanie" value="12"></li>

		</ul>

		</div>

		<div id="przewagi">

			<ul>

			<li>Tempo:[<input name="tempo">]</li>

			<li>Obrona:[<input name="obrona">]</li>

			<li>Wytrzymalosc:[<input name="wytrzymalosc">]</li>

			<li>Charyzma:[<input name="charyzma">]</li>

			</ul>

			<br>

			<textarea rows="15" cols="30" name="przewagi">	

			</textarea>

			Przewagi

			<br>

			<textarea rows="15" cols="30" name="zawady">

			</textarea>

			Zawady

		</div>

		<input type="submit" name="submit" value="wyslij karte postaci">

	</form>

	<br>

	<form action="skyrimwybor.php" method="post">

			<input type="text" name="nick" placeholder="wpisz login gracza">

			<input type="submit" name="pokaz" value="pokaz karte postaci">

	</form>

	<div id="bronie">

	

	

	</div>

    </div>

	<?php include 'reklama.php';?>

    <?php include 'stopka.php';?>

    </div>



</body>

</html>