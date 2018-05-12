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
	<meta name="keywords" content="s³owa, kluczowe, wypisane, po, porzecinku" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="skarta.css">
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
	//sprawdzenie poprawnosci metody przesylania i zczytywanie wszystkich zmiennych
	@$imie=$_POST['imie'];
	@$koncepcja=$_POST['koncepcja'];
	@$wyglad=$_POST['wyglad'];
	@$duch=$_POST['duch'];
	@$odwaga=$_POST['odwaga'];
	@$przekonywanie=$_POST['przekonywanie'];
	@$zastraszanie=$_POST['zastraszanie'];
	@$sila=$_POST['sila'];
	@$wspinaczka=$_POST['wspinaczka'];
	@$spryt=$_POST['spryt'];
	@$hazard=$_POST['hazard'];
	@$leczenie=$_POST['leczenie'];
	@$przetrwanie=$_POST['przetrwanie'];
	@$reperowanie=$_POST['reperowanie'];
	@$spostrzegawczosc=$_POST['spostrzegawczosc'];
	@$tropienie=$_POST['tropienie'];
	@$wyszukiwanie=$_POST['wyszukiwanie'];
	@$wypytywanie=$_POST['wypytywanie'];
	@$wysmiewanie=$_POST['wysmiewanie'];
	@$wiedza=$_POST['wiedza'];
	@$wiedzaz=$_POST['wiedzaz'];
	@$wiedzao=$_POST['wiedzao'];
	@$wigor=$_POST['wigor'];
	@$zrecznosc=$_POST['zrecznosc'];
	@$jezdziectwo=$_POST['jezdziectwo'];
	@$plywanie=$_POST['plywanie'];
	@$rzucanie=$_POST['rzucanie'];
	@$skradanie=$_POST['skradanie'];
	@$strzelanie=$_POST['strzelanie'];
	@$walka=$_POST['walka'];
	@$wlamywanie=$_POST['wlamywanie'];
	@$zeglowanie=$_POST['zeglowanie'];
	@$tempo=$_POST['tempo'];
	@$obrona=$_POST['obrona'];
	@$wytrzymalosc=$_POST['wytrzymalosc'];
	@$charyzma=$_POST['charyzma'];
	@$przewagi=$_POST['przewagi'];
	@$zawady=$_POST['zawady'];
	//wyciszenie potrzebne aby uniknac wyswietlania bledow php.Petla z if isset($cechy[$i]) sluzy do sprawdzenia czy wszystkie cechy sa wprowadzone
	$cechyc = array($imie,$koncepcja,$wyglad,$duch,$odwaga,$przekonywanie,$zastraszanie,$sila,$wspinaczka,$spryt,$hazard,$leczenie,$przetrwanie,$reperowanie,$spostrzegawczosc,$tropienie,$wyszukiwanie,$wypytywanie,$wysmiewanie,$wiedza,$wiedzaz,$wigor,$zrecznosc,$jezdziectwo,$plywanie,$rzucanie,$skradanie,$strzelanie,$walka,$wlamywanie,$zeglowanie,$tempo,$obrona,$wytrzymalosc,$charyzma,$przewagi,$zawady);
	for($i=0;$i<count($cechyc);$i++)
	{
		if(!(isset($cechyc[$i])))
		{
			$j++;
		}
	}
	
}
if($j>0)
{
	echo "brak wartości w ".$j." polach";
}
else
{
	echo "dodaje wartosci <br>";
	$sql="INSERT INTO skarta (ID,imie,koncepcja,wyglad,duch,odwaga,przekonywanie,zastraszanie,sila,wspinaczka,spryt,hazard,leczenie,przetrwanie,reperowanie,spostrzegawczosc,tropienie,wyszukiwanie,wypytywanie,wysmiewanie,wiedza,wiedzaz,wiedzao,wigor,zrecznosc,jezdziectwo,plywanie,rzucanie,skradanie,strzelanie,walka,wlamywanie,zeglowanie,tempo,obrona,wytrzymalosc,charyzma,przewagi,zawady) 
	VALUES (NULL,'$imie','$koncepcja','$wyglad',$duch,$odwaga,$przekonywanie,$zastraszanie,$sila,$wspinaczka,$spryt,$hazard,$leczenie,$przetrwanie,$reperowanie,$spostrzegawczosc,$tropienie,$wyszukiwanie,$wypytywanie,$wysmiewanie,$wiedza,$wiedzaz,$wiedzao,$wigor,$zrecznosc,$jezdziectwo,$plywanie,$rzucanie,$skradanie,$strzelanie,$walka,$wlamywanie,$zeglowanie,$tempo,$obrona,$wytrzymalosc,$charyzma,'$przewagi','$zawady')";
	if($conn->query($sql)===TRUE)
	{
		echo "Rekordy dodane pomyslnie<br>";
		echo "Twoja karta postaci:<br><table>"; 
		$zapytanie="SELECT * FROM `skarta` WHERE imie='$imie'";
		$wynik = $conn->query($zapytanie);
		$i=0;
		if($row = $wynik->fetch_assoc()) 
			{
				//umieszczenie tablicy asocjacyjnej w 2 innych tablicach jednowymiarowych
				foreach($row as $key=>$key_value)
				{
				$naglowki[$i]=$key;
				$wartosci[$i]=$key_value;
				$i++;
				}
			echo "
			<div id='charakter'>
		<ul>
		<li>Imie: ".$wartosci[1]."</li>
		<li>Koncepcja: ".$wartosci[2]."</li>
		<li>Wyglad: ".$wartosci[3]."</li>
		</ul>
			</div>
		<div id='cechy'>";
			for($k=4;$k<33;$k++)
				{
				echo "<li>".$naglowki[$k].": ".$wartosci[$k]."</li>";
				}
			echo "</div>
			<div id='przewagi'>
				<ul>
				<li>Tempo: [".$wartosci[33]."]</li>
				<li>Obrona: [".$wartosci[34]."]</li>
				<li>Wytrzymałość: [".$wartosci[35]."]</li>
				<li>Charyzma: [".$wartosci[36]."]</li>
				</ul>
				".$wartosci[37]."<br>".$wartosci[38]."
			</div>
			";
			}
		
	}
}
echo "</div>";
			include 'reklama.php';
			include 'stopka.php';
			echo "</body>
</html>";
?>