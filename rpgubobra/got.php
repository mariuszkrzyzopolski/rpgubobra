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

	<link rel="stylesheet" type="text/css" href="gkarta.css">

	<!-- czcionka z google font -->

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Fira+Sans+Extra+Condensed|Josefin+Sans&amp;subset=latin-ext" rel="stylesheet">

    </head>

<body onload="zegarek();">

<div id="container">

<?php include 'naglowek.php' ?>

	<?php include 'menu.php' ?>

	<div id="main">

	<form action="got_wyslanie.php" method="post">

		<table>

			<tr>

				<td><span>Imię:</span></td><td colspan="5"><input type="text" name="imie"></td>

			</tr>

			<tr>

				<td><span>Wiek:</span></td><td><input type="text" name="wiek"></td>

				<td><span>Płeć:</span></td><td><input type="text" name="plec"></td>

				<td><span>Ród:</span></td><td><input type="text" name="rod"></td>

			</tr>

		</table>

		<table>

			<thead>

				<tr><td colspan="4"><span>Zdolności</span></td></tr>

			</thead>

			<tbody>

				<tr>

					<td><span>Kondycja:</span></td><td><input name="kondycja"></td>

					<td><span>Status:</span></td><td><input name="status"></td>

				</tr>

				<tr>

					<td><span>Leczenie:</span></td><td><input name="leczenie"></td>

					<td><span>Strzelectwo:</span></td><td><input name="strzelectwo"></td>

				</tr>

				<tr>

					<td><span>Opieka nad zwierzetami:</span></td><td><input name="opieka_nad_zwierzetami"></td>

					<td><span>ukrycie:</span></td><td><input name="ukrycie"></td>

				</tr>

				<tr>

					<td><span>perswazja:</span></td><td><input name="perswazja"></td>

					<td><span>walka:</span></td><td><input name="walka"></td>

				</tr>

				<tr>

					<td><span>prowadzenie wojny:</span></td><td><input name="prowadzenie_wojny"></td>

					<td><span>wiedza:</span></td><td><input name="wiedza"></td>

				</tr>

				<tr>

					<td><span>przebieglosc:</span></td><td><input name="przebieglosc"></td>

					<td><span>wola:</span></td><td><input name="wola"></td>

				</tr>

				<tr>

					<td><span>przetrwanie:</span></td><td><input name="przetrwanie"></td>

					<td><span>zrecznosc:</span></td><td><input name="zrecznosc"></td>

				</tr>

				<tr>

					<td><span>spostrzegawczosc:</span></td><td><input name="spostrzegawczosc"></td>

					<td><span>zlodziejstwo:</span></td><td><input name="zlodziejstwo"></td>

				</tr>

				<tr>

					<td><span>spryt:</span></td><td><input name="spryt"></td>

					<td><span>zywotnosc:</span></td><td><input name="zywotnosc"></td>

				</tr>

				<tr>

					<td><span>języki:</span></td><td colspan="3"><input type="text" name="jezyk_nazwa" value="Nazwy jezyków"><input name="jezyk_wartosc" value="wartość cech"></td>

				</tr>

			</tbody>

		</table>

		<table>

			<thead>

				<tr><td colspan="3"><span>Specjalizacje</span></td></tr>

				<tr>

					<td><span>Specjalizacja</span></td>

					<td><span>Wartość</span></td>

					<td><span>Cecha główna(np status)</span></td>

				</tr>

			</thead>

			<tbody>

				<tr>

			<td><input type="text" name="specjalizacja"></td><td><input name="wartosc"></td><td><input type="text" name="cecha"></td>

			</tr>

			<tr>

			<td><input type="text" name="specjalizacja_a"></td><td><input name="wartosc_a"></td><td><input type="text" name="cecha_a"></td>

			</tr>

			<tr>

			<td><input type="text" name="specjalizacja_b"></td><td><input name="wartosc_b"></td><td><input type="text" name="cecha_b"></td>

			</tr>

			<tr>

			<td><input type="text" name="specjalizacja_c"></td><td><input name="wartosc_c"></td><td><input type="text" name="cecha_c"></td>

			</tr>

			<tr>

			<td><input type="text" name="specjalizacja_d"></td><td><input name="wartosc_d"></td><td><input type="text" name="cecha_d"></td>

			</tr>

			<tr>

			<td><input type="text" name="specjalizacja_e"></td><td><input name="wartosc_e"></td><td><input type="text" name="cecha_e"></td>

			</tr>

			<tr>

			<td><input type="text" name="specjalizacja_f"></td><td><input name="wartosc_f"></td><td><input type="text" name="cecha_f"></td>

			</tr>

			</tbody>

		</table>

		<input type="submit" name="submit" value="wyslij karte postaci">

	</form>

	<form action="gotwybor.php" method="post">

			<input type="text" name="nick" placeholder="wpisz login gracza" class="pokazywanie">

			<input type="submit" name="pokaz" value="pokaz karte postaci" class="pokazywanie">

	</form>

    </div>

	<?php include 'reklama.php';?>

    <?php include 'stopka.php';?>

    </div>

</body>

</html>