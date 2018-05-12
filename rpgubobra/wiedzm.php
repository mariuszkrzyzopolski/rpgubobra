<?php

session_start();

if (!isset($_SESSION['login_flag']))

{

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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">

       

        </script>

	

	<meta name="description" content="Opis w Google" />

	<meta name="keywords" content="słowa, kluczowe, wypisane, po, porzecinku" />

	<link rel="stylesheet" type="text/css" href="style.css">

        <link rel="stylesheet" type="text/css" href="wkarta.css">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Fira+Sans+Extra+Condensed|Josefin+Sans&amp;subset=latin-ext" rel="stylesheet">

    </head>

<body onload="zegarek();">

<div id="container">

<?php include 'naglowek.php' ?>

    <?php include 'menu.php' ?>

	<div id="main">

            <form action="wiedzmin.php" method="post">

            <table>

                    <tr><td rowspan="3"><img src="wobrazek.png" alt=""/></td>

                        <td>wiek<input class="tyt" type="text" name="wiek"></td>

                        <td>płeć<input class="tyt" type="text" name="plec"></td>

                    </tr>

                    <tr>

                        <td>wzrost<input class="tyt" name="wzrost"></td>

                        <td>oczy<input class="tyt" name="oczy"></td>

                    </tr>

                    <tr>

                        <td>waga<input class="tyt" name="waga"></td>

                        <td>wlosy<input class="tyt" name="wlosy"></td>

                    </tr>

                    <tr>

                        <td>gracz<input class="tyt" name="gracz"></td>

                        <td>imie<input class="tyt" name="imie"></td>

                        <td>rasa<input class="tyt" name="rasa"></td>

                    </tr>

            </table>

            <table>

                    <tr>

                        <td colspan="3"><h3>Cechy ciała</h3></td>

                    </tr>

               

                    <tr>

                        <td><b>Kondycja</b><input type="text" name="kondycja"></td>

                        <td>empatia<input type="text" name="empatia"></td>

						<td><b>Zręczność</b><input type="text" name="zrecznosc"></td>

                        <td><b>Zwinność</b><input type="text" name="zwinnosc"></td>

                    </tr>

                    <tr>

                        <td>pływanie<input type="text" name="plywanie"></td>

                        <td>nasłuchiwanie<input type="text" name="nasluchiwanie"></td>

						<td>charakteryzacja<input type="text" name="charakteryzacja"></td>

						<td>akrobatyka<input type="text" name="akrobatyka"></td>

                    </tr>

                    <tr>

                        <td>wigor<input type="text" name="wigor"></td>

                        <td>polowanie<input type="text" name="polowanie"></td>

                        <td>fałszowanie<input type="text" name="falszowanie"></td>

                        <td>gibkość<input type="text" name="gibkosc"></td>

                    </tr>

                    <tr>

                        <td><b>Poruszanie</b><input type="text" name="poruszanie"></td>

                        <td>Przeszukiwanie<input type="text" name="przeszukiwanie"></td>

                        <td>Rzezanie mieszków<input type="text" name="rzezanie"></td>

                        <td>jeździectwo<input type="text" name="jezdziectwo"></td>						

                    </tr>

                    <tr>

                        <td><b>Siła</b><input type="text" name="sila"></td>					

                        <td>rzucanie<input type="text" name="rzucanie"></td>

                        <td rowspan="2">unieszkodliwianie pułapek<input type="text" name="unieszkodliwianie"></td>

                        <td>powożenie<input type="text" name="powozenie"></td>

                    </tr>

                    <tr>

                        <td>górnictwo<input type="text" name="gornictwo"></td>

                        <td>spostrzegawczość<input type="text" name="spostrzegawczosc"></td>

                        <td>rybołóstwo<input type="text" name="rybolostwo"></td>

                    </tr>

                    <tr>

                        <td rowspan="2"><b>Zmysły</b><input type="text" name="zmysly"></td>					

                        <td>strzelanie<input type="text" name="strzelanie"></td>

                        <td>walka bronią<input type="text" name="walkab"></td>						

                        <td>skradanie<input type="text" name="skradanie"></td>						

                    </tr>

                    <tr>

                        <td>tortury<input type="text" name="tortury"></td>

                        <td>walka wręcz<input type="text" name="walkaw"></td>						

                        <td>wspinaczka<input type="text" name="wspinaczka"></td>						

                    </tr>

                    <tr>

                        <td rowspan="2">czytanie z ruchu warg<input type="text" name="czytanie"></td>											

                        <td>tropienie<input type="text" name="tropienie"></td>

						<td>włamywanie<input type="text" name="wlamywanie"></td>

						<td></td>

                    </tr>

                    <tr>

                        <td>Unik<input type="text" name="unik"></td>

						<td></td>

						<td></td>

                    </tr>

                    <tr>

						<td></td>

                        <td>widzenie w ciemnosci<input type="text" name="widzenie"></td>

                        <td></td>

						<td></td>

                    </tr>

                    

            </table>

			 <table>

                    <tr>

                        <td colspan="3"><h3>Cechy ducha</h3></td>

                    </tr>

               

                    <tr>

                        <td><b>Intelekt</b><input type="text" name="intelekt"></td>

                        <td>modlitwy<input type="text" name="modlitwy"></td>

						<td>zbieranie informacji<input type="text" name="zbieranie"></td>

                        <td>rozmawianie<input type="text" name="rozmawianie"></td>

                    </tr>

                    <tr>

                        <td>alchemia<input type="text" name="alchemia"></td>

                        <td>magia<input type="text" name="magia"></td>

						<td>zeglarstwo<input type="text" name="zeglarstwo"></td>

						<td>zastraszanie<input type="text" name="zastraszanie"></td>

					</tr> 

					<tr>

                        <td>astrologia<input type="text" name="astrologia"></td>

                        <td>przetrwanie<input type="text" name="przetrwanie"></td>

						<td>znaki wiedźmińskie<input type="text" name="znaki"></td>

						<td><b>Wola</b><input type="text" name="wola"></td>

					</tr>

					<tr>

					    <td>cwaniactwo<input type="text" name="cwaniactwo"></td>

                        <td>szacowanie<input type="text" name="szacowanie"></td>

						<td><b>Ogłada</b><input type="text" name="oglada"></td>

						<td>dociekliwość<input type="text" name="dociekliwosc"></td>

					</tr>

					<tr>

                        <td>czytanie i pisanie<input type="text" name="pisanie"></td>					

                        <td>taktyka<input type="text" name="taktyka"></td>

						<td>dowodzenie<input type="text" name="dowodzenie"></td>

						<td>koncentracja<input type="text" name="koncentracja"></td>

					</tr>

					<tr>

                        <td>ekonomia<input type="text" name="ekonomia"></td>					

                        <td>uzdrawianie<input type="text" name="uzdrawianie"></td>

						<td>dyplomacja<input type="text" name="dyplomacja"></td>

						<td>kupiectwo<input type="text" name="kupiectwo"></td>

					</tr>

					<tr>

                        <td>geografia<input type="text" name="geografia"></td>

                        <td>wiedza<input type="text" name="wiedza"></td>

						<td>etykieta<input type="text" name="etykieta"></td>

						<td>przekupstwo<input type="text" name="przekupstwo"></td>

					</tr>

					<tr>

                        <td>starsza mowa<input type="text" name="starsza"></td>

                        <td>wiedza<input type="text" name="wiedza_o"></td>

						<td>przemawianie<input type="text" name="przemawianie"></td>

						<td>przenikliwosc<input type="text" name="przenikliwosc"></td>

					</tr>

					<tr>

                        <td>wspolny<input type="text" name="wspolny"></td>

                        <td>wiedza<input type="text" name="wiedza_z"></td>

						<td></td>

						<td>szelmostwo<input type="text" name="szelmostwo"></td>

					</tr>

					<tr>

                        <td>ojczysty<input type="text" name="ojczysty"></td>

                        <td></td>

						<td></td>

						<td>zimna krew<input type="text" name="zimna"></td>

					</tr>

					</table>

					

			<br/>

			<br/>

			<input type="submit" name="submit" value="wyslij karte postaci" class="tyt">

            </form>

			<form action="wybor.php" method="post">

			<input type="text" name="nick" class="tyt lewo" placeholder="wpisz login gracza">

			<input type="submit" name="pokaz" value="pokaz karte postaci" class="tyt lewo">

			</form>

        </div>

			<?php include 'reklama.php';?>

			<?php include 'stopka.php';?>
	

</body>

</html>

