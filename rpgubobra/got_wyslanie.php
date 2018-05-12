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
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="gkarta.css">
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
	$wiek=$_POST['wiek'];
	$plec=$_POST['plec'];
	$rod=$_POST['rod'];
	$kondycja=$_POST['kondycja'];
	$status=$_POST['status'];
	$leczenie=$_POST['leczenie'];
	$strzelectwo=$_POST['strzelectwo'];
	$opieka_nad_zwierzetami=$_POST['opieka_nad_zwierzetami'];
	$ukrycie=$_POST['ukrycie'];
	$perswazja=$_POST['perswazja'];
	$walka=$_POST['walka'];
	$prowadzenie_wojny=$_POST['prowadzenie_wojny'];
	$wiedza=$_POST['wiedza'];
	$przebieglosc=$_POST['przebieglosc'];
	$wola=$_POST['wola'];
	$przetrwanie=$_POST['przetrwanie'];
	$zrecznosc=$_POST['zrecznosc'];
	$spostrzegawczosc=$_POST['spostrzegawczosc'];
	$zlodziejstwo=$_POST['zlodziejstwo'];
	$spryt=$_POST['spryt'];
	$zywotnosc=$_POST['zywotnosc'];
	$jezyk_nazwa=$_POST['jezyk_nazwa'];
	$jezyk_wartosc=$_POST['jezyk_wartosc'];
	$specjalizacja=$_POST['specjalizacja'];
	$wartosc=$_POST['wartosc'];
	$cecha=$_POST['cecha'];
	$specjalizacja_a=$_POST['specjalizacja_a'];
	$wartosc_a=$_POST['wartosc_a'];
	$cecha_a=$_POST['cecha_a'];
	$specjalizacja_b=$_POST['specjalizacja_b'];
	$wartosc_b=$_POST['wartosc_b'];
	$cecha_b=$_POST['cecha_b'];
	$specjalizacja_c=$_POST['specjalizacja_c'];
	$wartosc_c=$_POST['wartosc_c'];
	$cecha_c=$_POST['cecha_c'];
	$specjalizacja_d=$_POST['specjalizacja_d'];
	$wartosc_d=$_POST['wartosc_d'];
	$cecha_d=$_POST['cecha_d'];
	$specjalizacja_e=$_POST['specjalizacja_e'];
	$wartosc_e=$_POST['wartosc_e'];
	$cecha_e=$_POST['cecha_e'];
	$specjalizacja_f=$_POST['specjalizacja_f'];
	$wartosc_f=$_POST['wartosc_f'];
	$cecha_f=$_POST['cecha_f'];
	//wyciszenie potrzebne aby uniknac wyswietlania bledow php.Petla z if isset($cechy[$i]) sluzy do sprawdzenia czy wszystkie cechy sa wprowadzone
	$cechyc = array($imie,$wiek,$plec,$rod,$kondycja,$status,$leczenie,$strzelectwo,$opieka_nad_zwierzetami,$ukrycie,$perswazja,$walka,$prowadzenie_wojny,$wiedza,$przebieglosc,$wola,$przetrwanie,$zrecznosc,$spostrzegawczosc,$zlodziejstwo,$spryt,$zywotnosc,$jezyk_nazwa,$jezyk_wartosc);
	for($i=0;$i<count($cechyc);$i++)
	{
		if($cechyc[$i]=="")
		{
			$j++;
		}
	}
	$spec=array($wartosc,$wartosc_a,$wartosc_b,$wartosc_c,$wartosc_d,$wartosc_e,$wartosc_f);
}
if($j>0)
{
	echo "brak wartości w ".$j." polach";
}
else
{
	//podmienic puste wyniki na 0
	echo "dodaje wartosci <br>";
	$sql="INSERT INTO gkarta(ID,imie,wiek,plec,rod,kondycja,status,leczenie,strzelectwo,opieka_nad_zwierzetami,ukrycie,perswazja,walka,prowadzenie_wojny,wiedza,przebieglosc,wola,przetrwanie,zrecznosc,spostrzegawczosc,zlodziejstwo,spryt,zywotnosc,jezyk_nazwa,jezyk_wartosc,specjalizacja,wartosc,cecha,specjalizacja_a,wartosc_a,cecha_a,specjalizacja_b,wartosc_b,cecha_b,specjalizacja_c,wartosc_c,cecha_c,specjalizacja_d,wartosc_d,cecha_d,specjalizacja_e,wartosc_e,cecha_e,specjalizacja_f,wartosc_f,cecha_f)VALUES(NULL,'$imie','$wiek','$plec','$rod','$kondycja','$status','$leczenie','$strzelectwo','$opieka_nad_zwierzetami','$ukrycie','$perswazja','$walka','$prowadzenie_wojny','$wiedza','$przebieglosc','$wola','$przetrwanie','$zrecznosc','$spostrzegawczosc','$zlodziejstwo','$spryt','$zywotnosc','$jezyk_nazwa','$jezyk_wartosc','$specjalizacja','$wartosc','$cecha','$specjalizacja_a','$wartosc_a','$cecha_a','$specjalizacja_b','$wartosc_b','$cecha_b','$specjalizacja_c','$wartosc_c','$cecha_c','$specjalizacja_d','$wartosc_d','$cecha_d','$specjalizacja_e','$wartosc_e','$cecha_e','$specjalizacja_f','$wartosc_f','$cecha_f')";
	if($conn->query($sql)===TRUE)
	{
		echo "Rekordy dodane pomyslnie<br>";
		echo "Twoja karta postaci:<br>"; 
		$zapytanie="SELECT * FROM `gkarta` WHERE imie='$imie'";
		$wynik = $conn->query($zapytanie);
		$d=0;
		if($row = $wynik->fetch_assoc()) 
			{
				//umieszczenie tablicy asocjacyjnej w 2 innych tablicach jednowymiarowych
				foreach($row as $key=>$key_value)
				{
				$naglowki[$d]=$key;
				$wartosci[$d]=$key_value;
				$d++;
				}
			echo "
			<table>
			<tr>
				<td><span>".$naglowki[1]."</span></td><td colspan='5' class='wiersz'>".$wartosci[1]."</td>
			</tr>
			<tr>
				<td><span>".$naglowki[2]."</span></td><td class='wiersz'>".$wartosci[2]."</td>
				<td><span>".$naglowki[3]."</span></td><td class='wiersz'>".$wartosci[3]."</td>
				<td><span>".$naglowki[4]."</span></td><td class='wiersz'>".$wartosci[4]."</td>
			</tr>
			</table><table>";
			for ($k=5;@$k<24;$k=$k+2) 
					{ 
						echo "<tr>
					<td><span>".$naglowki[$k]."</span></td><td class='wiersz'>".$wartosci[$k]."</td>
					<td><span>".$naglowki[$k+1]."</span></td><td class='wiersz'>".$wartosci[$k+1]."</td>
							</tr>";
					}
					echo "</table><table><thead><tr><td colspan='3'><span>Specjalizacje</span></td></tr>
				<tr>
					<td><span>Specjalizacja</span></td>
					<td><span>Wartość</span></td>
					<td><span>Cecha główna(np status)</span></td>
				</tr></thead><tbody>";
					for ($k;$k<count($wartosci);$k=$k+3) 
					{ 
						if (($wartosci[$k]!="")||($wartosci[$k+1]!="")||($wartosci[$k+2]!="")) 
						{
							echo "<tr class='wiersz'>
									<td class='wiersz'>".$wartosci[$k]."</td><td class='wiersz'>".$wartosci[$k+1]."</td><td class='wiersz'>".$wartosci[$k+2]."</td>
								</tr>";
						}
					}
					echo "</tbody></table><table>
					<tr></tr>
					</table>";
			}
		
	}
	else
	{
		//zrobic wyswietlenie bledu
		echo "bład sql".$conn->error;
	}
}
echo "</div>";
			include 'reklama.php';
			include 'stopka.php';
			echo "</body>
</html>";
?>
