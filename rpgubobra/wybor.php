<?php

//dostosowac do serwera rpgubobra;

include 'polaczenie.php';

	$conn=new mysqli($servername,$username,$password,$dbname);

    if($_SERVER["REQUEST_METHOD"]=="POST")

	$nick=$_POST['nick'];

	$wybor="SELECT * FROM `wkarta` WHERE gracz='$nick'";

	$result = $conn->query($wybor);

	

	echo '<!DOCTYPE HTML>

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

<div id="container">';

include 'naglowek.php';

     include 'menu.php';

	echo "<div id='main'>";

    if($row = $result->fetch_assoc()) {

    echo 

        //tabela,powinna byc petla z elementami tabeli

        "<table>

		<tr>

		<td rowspan='3'><img src='wobrazek.png' alt=''/>

		<td>wiek:".$row['wiek']."</td>

		<td>płeć:".$row['plec']."</td>

		</tr>

		<tr>

            <td>wzrost:".$row['wzrost']."</td>

            <td>oczy:".$row['oczy']."</td>

        </tr>

		<tr>

            <td>waga:".$row['waga']."</td>

            <td>wlosy:".$row['wlosy']."</td>

        </tr>

		<tr>

            <td>gracz:".$row['gracz']."</td>

            <td>imie:".$row['imie']."</td>

            <td>rasa:".$row['rasa']."</td>

        </tr>

			</table>

			<table>

			<tr>

                        <td colspan='3'><h3>Cechy ciała</h3></td>

                    </tr>

               

                    <tr>

                        <td><b>Kondycja: </b>".$row['kondycja']."</td>

                        <td>empatia:".$row['empatia']."</td>

						<td><b>Zręczność: </b>".$row['zrecznosc']."</td>

                        <td><b>Zwinność: </b>".$row['zwinnosc']."</td>

                    </tr>

                    <tr>

                        <td>pływanie:".$row['plywanie']."</td>

                        <td>nasłuchiwanie:".$row['nasluchiwanie']."</td>

						<td>charakteryzacja:".$row['charakteryzacja']."</td>

						<td>akrobatyka:".$row['akrobatyka']."</td>

                    </tr>

                    <tr>

                        <td>wigor:".$row['wigor']."</td>

                        <td>polowanie:".$row['polowanie']."</td>

                        <td>fałszowanie:".$row['falszowanie']."</td>

                        <td>gibkość:".$row['gibkosc']."</td>

                    </tr>

                    <tr>

                        <td><b>Poruszanie: </b>".$row['poruszanie']."</td>

                        <td>Przeszukiwanie:".$row['przeszukiwanie']."</td>

                        <td>Rzezanie mieszków:".$row['rzezanie']."</td>

                        <td>jeździectwo:".$row['jezdziectwo']."</td>						

                    </tr>

                    <tr>

                        <td><b>Siła: </b>".$row['sila']."</td>					

                        <td>rzucanie:".$row['rzucanie']."</td>

                        <td rowspan='2'>unieszkodliwianie pułapek:".$row['unieszkodliwianie']."</td>

                        <td>powożenie:".$row['powozenie']."</td>

                    </tr>

                    <tr>

                        <td>górnictwo:".$row['gornictwo']."</td>

                        <td>spostrzegawczość:".$row['spostrzegawczosc']."</td>

                        <td>rybołóstwo:".$row['rybolostwo']."</td>

                    </tr>

                    <tr>

                        <td rowspan='2'><b>Zmysły: </b>".$row['zmysly']."</td>					

                        <td>strzelanie:".$row['strzelanie']."</td>

                        <td>walka bronią:".$row['walkab']."</td>						

                        <td>skradanie:".$row['skradanie']."</td>						

                    </tr>

                    <tr>

                        <td>tortury:".$row['tortury']."</td>

                        <td>walka wręcz:".$row['walkaw']."</td>						

                        <td>wspinaczka:".$row['wspinaczka']."</td>						

                    </tr>

                    <tr>

                        <td rowspan='2'>czytanie z ruchu warg:".$row['czytanie']."</td>											

                        <td>tropienie:".$row['tropienie']."</td>

						<td>włamywanie:".$row['wlamywanie']."</td>

						<td></td>

                    </tr>

                    <tr>

                        <td>Unik:".$row['unik']."</td>

						<td></td>

						<td></td>

                    </tr>

                    <tr>

						<td></td>

                        <td>widzenie w ciemnosci:".$row['widzenie']."</td>

                        <td></td>

						<td></td>

                    </tr>								

			</table>

			<table>

                    <tr>

                        <td colspan='3'><h3>Cechy ducha</h3></td>

                    </tr>

               

                    <tr>

                        <td><b>Intelekt: </b>".$row['Intelekt']."</td>

                        <td>modlitwy: ".$row['modlitwy']."</td>

						<td>zbieranie informacji: ".$row['zbieranie_informacji']."</td>

                        <td>rozmawianie: ".$row['rozmawianie']."</td>

                    </tr>

                    <tr>

                        <td>alchemia: ".$row['alchemia']."</td>

                        <td>magia: ".$row['magia']."</td>

						<td>żeglarstwo: ".$row['zeglarstwo']."</td>

						<td>zastraszanie: ".$row['zastraszanie']."</td>

					</tr> 

					<tr>

                        <td>astrologia: ".$row['astrologia']."</td>

                        <td>przetrwanie: ".$row['przetrwanie']."</td>

						<td>znaki wiedźmińskie: ".$row['znaki_wiedzminskie']."</td>

						<td><b>Wola: </b>".$row['Wola']."</td>

					</tr>

					<tr>

                        <td>cwaniactwo: ".$row['cwaniactwo']."</td>

                        <td>szacowanie: ".$row['szacowanie']."</td>

						<td><b>Ogłada: ".$row['Oglada']."</td>

						<td>dociekliwość: ".$row['dociekliwosc']."</td>

					</tr>

					<tr>

                        <td>czytanie i pisanie: ".$row['pisanie']."</td>

                        <td>taktyka: ".$row['taktyka']."</td>

						<td>dowodzenie: ".$row['dowodzenie']."</td>

						<td>koncentracja: ".$row['koncentracja']."</td>

					</tr>

					<tr>

                        <td>ekonomia: ".$row['ekonomia']."</td>

                        <td>uzdrawianie: ".$row['uzdrawianie']."</td>

						<td>dyplomacja: ".$row['dyplomacja']."</td>

						<td>kupiectwo: ".$row['kupiectwo']."</td>

					</tr>

					<tr>

                        <td>geografia: ".$row['geografia']."</td>

                        <td>wiedza: ".$row['wiedza']."</td>

						<td>etykieta: ".$row['etykieta']."</td>

						<td>przekupstwo: ".$row['przekupstwo']."</td>

					</tr>

					<tr>

                        <td>starsza: ".$row['starsza']."</td>

                        <td>wiedza_o: ".$row['wiedza_o']."</td>

						<td>przemawianie: ".$row['przemawianie']."</td>

						<td>przenikliwosc: ".$row['przenikliwosc']."</td>

					</tr>

					<tr>

                        <td>wspolny: ".$row['wspolny']."</td>

                        <td>wiedza_z: ".$row['wiedza_z']."</td>

						<td></td>

						<td>szelmostwo: ".$row['szelmowstwo']."</td>

					</tr>

					<tr>

                        <td>ojczysty: ".$row['ojczysty']."</td>

                        <td></td>

						<td></td>

						<td>zimna krew: ".$row['zimna']."</td>

					</tr>

					</table>";

    }

	else

	{

        //brak rekordu w bazie

		echo "nie znaleziono<br>";

		echo "<a href='index.php'>wróć do strony głównej</a>";

	}

	echo "</div>

			";include 'reklama.php';

			include 'stopka.php';

			echo"

            <!-- kod przed zamknięciem body -->
		

</body>

</html>";

?>