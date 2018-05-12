<?php
//dostosowac do serwera rpgubobra
include 'polaczenie.php';
//polaczenie z baza danych
$conn=new mysqli($servername,$username,$password,$dbname);
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
	if($conn->connect_error)
{
	die("nie udalo sie polaczyc do bazy ".$conn->connect_error);
}
$j=0;
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	//zczytywanie zmiennych i sprawdzenie metody
	$wiek=$_POST['wiek'];
	$plec=$_POST['plec'];
	$wzrost=$_POST['wzrost'];
	$oczy=$_POST['oczy'];
	$waga=$_POST['waga'];
	$wlosy=$_POST['wlosy'];
	$gracz=$_POST['gracz'];
	$imie=$_POST['imie'];
	$rasa=$_POST['rasa'];
	$kondycja=$_POST['kondycja'];
	$empatia=$_POST['empatia'];
	$plywanie=$_POST['plywanie'];
	$nasluchiwanie=$_POST['nasluchiwanie'];
	$zrecznosc=$_POST['zrecznosc'];
	$wigor=$_POST['wigor'];
	$polowanie=$_POST['polowanie'];
	$charakteryzacja=$_POST['charakteryzacja'];
	$zwinnosc=$_POST['zwinnosc'];
	$przeszukiwanie=$_POST['przeszukiwanie'];
	$falszowanie=$_POST['falszowanie'];
	$akrobatyka=$_POST['akrobatyka'];
	$poruszanie=$_POST['poruszanie'];
	$rzucanie=$_POST['rzucanie'];
	$gibkosc=$_POST['gibkosc'];
	$spostrzegawczosc=$_POST['spostrzegawczosc'];
	$jezdziectwo=$_POST['jezdziectwo'];
	$sila=$_POST['sila'];
	$strzelanie=$_POST['strzelanie'];
	$rzezanie=$_POST['rzezanie'];
	$powozenie=$_POST['powozenie'];
	$gornictwo=$_POST['gornictwo'];
	$tortury=$_POST['tortury'];
	$unieszkodliwianie=$_POST['unieszkodliwianie'];
	$rybolostwo=$_POST['rybolostwo'];
	$tropienie=$_POST['tropienie'];
	$skradanie=$_POST['skradanie'];
	$zmysly=$_POST['zmysly'];
	$unik=$_POST['unik'];
	$walkab=$_POST['walkab'];
	$wspinaczka=$_POST['wspinaczka'];
	$czytanie=$_POST['czytanie'];
	$widzenie=$_POST['widzenie'];
	$walkaw=$_POST['walkaw'];
	$wlamywanie=$_POST['wlamywanie'];
	$intelekt=$_POST['intelekt'];
	$modlitwy=$_POST['modlitwy'];
	$zbieranie=$_POST['zbieranie'];
	$rozmawianie=$_POST['rozmawianie'];
	$alchemia=$_POST['alchemia'];
	$magia=$_POST['magia'];
	$zeglarstwo=$_POST['zeglarstwo'];
	$zastraszanie=$_POST['zastraszanie'];
	$cwaniactwo=$_POST["cwaniactwo"];
    $przetrwanie=$_POST["przetrwanie"];
	$znaki=$_POST['znaki'];
	$Wola=$_POST["wola"];
	$pisanie=$_POST["pisanie"];
    $szacowanie=$_POST["szacowanie"];
	$Oglada=$_POST["oglada"];
	$dociekliwosc=$_POST["dociekliwosc"];
	$ekonomia=$_POST["ekonomia"];
    $taktyka=$_POST["taktyka"];
	$dowodzenie=$_POST["dowodzenie"];
	$koncentracja=$_POST["koncentracja"];
	$astrologia=$_POST['astrologia'];
    $uzdrawianie=$_POST["uzdrawianie"];
	$dyplomacja=$_POST["dyplomacja"];
	$kupiectwo=$_POST["kupiectwo"];
	$geografia=$_POST["geografia"];
    $wiedza=$_POST["wiedza"];
	$etykieta=$_POST["etykieta"];
	$przekupstwo=$_POST["przekupstwo"];
	$starsza=$_POST["starsza"];
    $wiedza_o=$_POST["wiedza_o"];
	$przemawianie=$_POST["przemawianie"];
	$przenikliwosc=$_POST["przenikliwosc"];
	$wspolny=$_POST["wspolny"];
    $wiedza_z=$_POST["wiedza_z"];
	$szelmostwo=$_POST["szelmostwo"];
	$ojczysty=$_POST["ojczysty"];
	$zimna=$_POST["zimna"];
	$cechyc = array($wiek,$wzrost,$waga,$plec,$oczy,$wlosy,$gracz,$imie,$rasa,$kondycja,$plywanie,$wigor,$poruszanie,$sila,$gornictwo,$zmysly,$czytanie,$empatia,$nasluchiwanie,$polowanie,$przeszukiwanie,$rzucanie,$spostrzegawczosc,$strzelanie,$tortury,$tropienie,$unik,$widzenie,$zrecznosc,$charakteryzacja,$falszowanie,$rzezanie,$unieszkodliwianie,$walkab,$walkaw,$wlamywanie,$wspinaczka,$zwinnosc,$akrobatyka,$gibkosc,$jezdziectwo,$powozenie,$rybolostwo,$skradanie,$intelekt,$modlitwy,$zbieranie,$rozmawianie,$alchemia,$magia,$zeglarstwo,$cwaniactwo,
	$przetrwanie,$znaki,$Wola,$pisanie,$szacowanie,$Oglada,$dociekliwosc,$ekonomia,
	$taktyka,$dowodzenie,$koncentracja,$astrologia,$uzdrawianie,$dyplomacja,$kupiectwo,$geografia,
	$wiedza,$etykieta,$przekupstwo,$starsza,$wiedza_o,$przemawianie,$przenikliwosc,$wspolny,$wiedza_z,
	$szelmostwo,$ojczysty,$zimna);
	//sprawdzenie czy wszedzie sa wpisane wartosci.W wiedzminie dopuszczalne sa wartosci 0,ale wszystkie pola musza zawierac jakas wartosc
	for($i=0;$i<=70;$i++)
	{
		if($cechyc[$i]=="")
		{
			$cechyc[$i]=0;
		}
	}
	
}
	echo "dodaje wartosci <br>";
	$sql="INSERT INTO wkarta (ID,gracz,wiek,plec,oczy,wlosy,wzrost,waga,imie,rasa,kondycja,plywanie,wigor,poruszanie,sila,gornictwo,zmysly,czytanie,empatia,nasluchiwanie,polowanie,przeszukiwanie,rzucanie,spostrzegawczosc,strzelanie,tortury,tropienie,unik,widzenie,zrecznosc,charakteryzacja,falszowanie,rzezanie,unieszkodliwianie,walkab,walkaw,wlamywanie,wspinaczka,zwinnosc,akrobatyka,gibkosc,jezdziectwo,powozenie,rybolostwo,skradanie,Intelekt,modlitwy,zbieranie_informacji,rozmawianie,alchemia,magia,zeglarstwo,zastraszanie,astrologia,przetrwanie,znaki_wiedzminskie,Wola,cwaniactwo,szacowanie,Oglada,dociekliwosc,pisanie,taktyka,dowodzenie,koncentracja,ekonomia,uzdrawianie,dyplomacja,kupiectwo,geografia,wiedza,etykieta,przekupstwo,starsza,wiedza_o,przemawianie,przenikliwosc,wspolny,wiedza_z,szelmowstwo,ojczysty,zimna) 
	VALUES (NULL,'$gracz',$wiek,'$plec','$oczy','$wlosy',$wzrost,$waga,'$imie','$rasa',$kondycja,$plywanie,$wigor,$poruszanie,$sila,$gornictwo,$zmysly,$czytanie,$empatia,$nasluchiwanie,$polowanie,$przeszukiwanie,$rzucanie,$spostrzegawczosc,$strzelanie,$tortury,$tropienie,$unik,$widzenie,$zrecznosc,$charakteryzacja,$falszowanie,$rzezanie,$unieszkodliwianie,$walkab,$walkaw,$wlamywanie,$wspinaczka,$zwinnosc,$akrobatyka,$gibkosc,$jezdziectwo,$powozenie,$rybolostwo,$skradanie,$intelekt,$modlitwy,$zbieranie,$rozmawianie,$alchemia,$magia,$zeglarstwo,$zastraszanie,$astrologia,$przetrwanie,$znaki,$Wola,$cwaniactwo,$szacowanie,$Oglada,$dociekliwosc,$pisanie,$taktyka,$dowodzenie,$koncentracja,$ekonomia,$uzdrawianie,$dyplomacja,$kupiectwo,$geografia,$wiedza,$etykieta,$przekupstwo,$starsza,$wiedza_o,$przemawianie,$przenikliwosc,$wspolny,$wiedza_z,$szelmostwo,$ojczysty,$zimna)";
	if($conn->query($sql)===TRUE)
	{
		echo "Rekordy dodane pomyslnie<br>";
		echo "Twoja karta postaci:<br><table>"; 
		$zapytanie="SELECT * FROM `wkarta` WHERE gracz='$gracz'";
		$wynik = $conn->query($zapytanie);
		$i=0;
		if($row = $wynik->fetch_assoc()) 
		{
				foreach($row as $key=>$key_value)
				{
				$naglowki[$i]=$key;
				$wartosci[$i]=$key_value;
				$i++;
				}
		echo "<table>
		<tr>
		<td rowspan='3'><img src='wobrazek.png' alt=''/>
		<td>wiek:".$wartosci[1]."</td>
		<td>płeć:".$wartosci[2]."</td>
		</tr>
		<tr>
        <td>wzrost:".$wartosci[3]."</td>
        <td>oczy:".$wartosci[4]."</td>
        </tr>
		<tr>
        <td>waga:".$wartosci[5]."</td>
        <td>wlosy:".$wartosci[6]."</td>
        </tr>
		<tr>
        <td>gracz:".$wartosci[7]."</td>
        <td>imie:".$wartosci[8]."</td>
        <td>rasa:".$wartosci[9]."</td>
        </tr>
		</table>
		<table>
		<tr>
        <td colspan='3'><h3>Cechy ciała</h3></td>
        </tr>";
				for($j=10;$j<41;$j=$j+4)
				{
				echo "<tr>
				<td>".$naglowki[$j].": ".$wartosci[$j]."</td>
				<td>".$naglowki[$j+1].": ".$wartosci[$j+1]."</td>
				<td>".$naglowki[$j+2].": ".$wartosci[$j+2]."</td>
			
				<td>".$naglowki[$j+3].": ".$wartosci[$j+3]."</td>
				</tr>";
				}
			
	echo "
	<tr>
	<td></td>
	<td>".$naglowki[42].": ".$wartosci[42]."</td>
	<td></td>
	<td></td>
	</tr>
	<tr>
	<td></td>
	<td>".$naglowki[43].": ".$wartosci[43]."</td>
	<td></td>
	<td></td>
	</tr>
	<tr>
	<td></td>
	<td>".$naglowki[44].": ".$wartosci[44]."</td>
	<td></td>
	<td></td>
	</tr>
	</table>
	 <table>
    <tr>
    <td colspan='3'><h3>Cechy ducha</h3></td>
    </tr>";
			for($j=45;$j<76;$j=$j+4)
			{
			echo "<tr>
			<td>".$naglowki[$j].": ".$wartosci[$j]."</td>
			<td>".$naglowki[$j+1].": ".$wartosci[$j+1]."</td>
			<td>".$naglowki[$j+2].": ".$wartosci[$j+2]."</td>
			<td>".$naglowki[$j+3].": ".$wartosci[$j+3]."</td>
			</tr>";
			}
	echo "
	<tr>
	<td>".$naglowki[77].": ".$wartosci[77]."</td>
	<td>".$naglowki[78].": ".$wartosci[78]."</td>
	<td></td>
	<td>".$naglowki[79].": ".$wartosci[79]."</td>
	</tr>
	<tr>
	<td>".$naglowki[80].": ".$wartosci[80]."</td>
	<td></td>
	<td></td>
	<td>".$naglowki[81].": ".$wartosci[81]."</td>
	</tr>
	</table>";
			}
	}
		else
		{
		echo "Error: ".$sql."<br>".$conn->error; 
		}
	
echo "</div>
			";
			include 'reklama.php';
			include 'stopka.php';
			echo "			
</body>
</html>";
?>