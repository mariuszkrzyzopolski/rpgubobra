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

                            <img class="rpg-zdjecia" src="grafiki/Wiedzmin.jpg">

                            <img class="rpg-zdjecia" src="grafiki/Harpy.jpg">

			</div>

			<div class="rpg-galeria">

                            <img class="rpg-zdjecia" src="grafiki/Grao.jpg">

                            <img class="rpg-zdjecia" src="grafiki/plio.jpg">

			</div>

		<div class="opis rpg-galeria">

			<b>Wiedzmin gra wyobrazni</b><br>

			Sesja prowadzona przez Mańka <br>

			aktualnie aktywnie grających: 5 osób.<br>

			Dwie prowadzone przygody, jedna zawieszona.<br>

			Zarejestrowanych kart postaci: 6(aktualnej) i 4(zawieszonej).<br>

			Martwe postacie: 2(aktualnej) i 6(zawieszonej).<br>

			<br>

			<a href="wiedzmin-fabula.php" class="button animacja">Fabuła sesji N-S</a>

			<a href="wiedzmin-fabula-TM.php" class="button animacja">Fabuła sesji TM</a>			

		</div>

		<div class="opis rpg-galeria">

			<b>Gra o tron</b><br>

			Sesja prowadzona przez Daszka <br>

			aktualnie aktywnie grających: 4 osoby.<br>

			Jedna prowadzona przygoda.<br>

			Zarejestrowanych kart postaci: 4.<br>

			Martwe postacie: 0.<br>

			<br>

			<a href="got-fabula.php" class="button animacja">Fabuła sesji</a>

		</div>

		<div class="rpg-galeria">

				<img class="rpg-zdjecia" src="grafiki/potwory.jpg">

                                <img class="rpg-zdjecia" src="grafiki/elblag.gif">

			</div>

			<div class="rpg-galeria">

				<img class="rpg-zdjecia" src="grafiki/SK.jpg">

				<img class="rpg-zdjecia" src="grafiki/skyrim.jpg">

			</div>

		<div class="opis rpg-galeria">

			<b>RPG Elbing,autorski</b><br>

			Sesja prowadzona przez Daszka <br>

			aktualnie aktywnie grających: 4 osoby.<br>

			Jedna prowadzona przygoda.<br>

			Zarejestrowanych kart postaci: 4.<br>

			Martwe postacie: 0.<br>

			<br>

			<a href="elbing-fabula.php" class="button animacja">Fabuła sesji</a>

		</div>

		<div class="opis rpg-galeria">

			<b>Skyrim na mechanice Savage world</b><br>

			Sesja prowadzona przez Mańka <br>

			aktualnie aktywnie grających: 7 osób.<br>

			Jedna prowadzona przygoda.<br>

			Zarejestrowanych kart postaci: 8.<br>

			Martwe postacie: 1.<br>

			<br>

			<a href="skyrim-fabula.php" class="button animacja">Fabuła sesji</a>

		</div>

		<div class="rpg-galeria">

                    <img class="rpg-zdjecia" src="grafiki/lechici.jpg">

				<img class="rpg-zdjecia" src="grafiki/lechia.jpg">

			</div>

		<div class="rpg-galeria">

				<img class="rpg-zdjecia" src="grafiki/adro.jpg">

				<img class="rpg-zdjecia" src="grafiki/brak.jpg">

			</div>

		<div class="opis rpg-galeria">

			<b>Alternatywna wersja historii,autorski</b><br>

			Sesja prowadzona przez Mańka i Daszka<br>

			aktualnie aktywnie grających: 0 osób.<br>

			Jedna prowadzona przygoda,zawieszona.<br>

			Zarejestrowanych kart postaci: 8.<br>

			Martwe postacie: 0.<br>

			<br>

			<a href="alternatywna-fabuła.php" class="button animacja">Fabuła sesji</a>

		</div>

		<div class="opis rpg-galeria">

			<b>Adro,autorski</b><br>

			Sesja prowadzona przez Daszka<br>

			aktualnie aktywnie grających: 0 osób.<br>

			Jedna prowadzona przygoda,zawieszona.<br>

			Zarejestrowanych kart postaci: 4.<br>

			Martwe postacie: 0.<br>

			<br>

			<a href="Adro-fabula.php" class="button animacja">Fabuła sesji</a>

		</div>

		<div class="rpg-galeria">

				<img class="rpg-zdjecia" src="grafiki/brak.jpg">

				<img class="rpg-zdjecia" src="grafiki/brak.jpg">

			</div>

		<div class="rpg-galeria">

				<img class="rpg-zdjecia" src="grafiki/beszamel.jpg">

                                <img class="rpg-zdjecia" src="grafiki/arkona.jpg">

			</div>

		<div class="opis rpg-galeria">

		<b>Podreczniki które mamy, a których jeszcze nie graliśmy</b><br>

		<ul>

		<li>Beszamel</li><br>

                <li>Arkona</li><br>

		</ul>

		</div>

	</div>

	<?php include 'reklama.php';?>

 	<?php include 'stopka.php';?>

 	</div>


</body>

</html>