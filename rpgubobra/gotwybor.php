<?php
//dostosowac do serwera rpgubobra;
include 'polaczenie.php';
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($_SERVER["REQUEST_METHOD"]=="POST")
	$nick=$_POST['nick'];
	
	
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
        <link rel="stylesheet" type="text/css" href="wkarta.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Fira+Sans+Extra+Condensed|Josefin+Sans&amp;subset=latin-ext" rel="stylesheet">
    </head>
<body onload="zegarek();">
<div id="container">';
include 'naglowek.php';
     include 'menu.php';
     echo "<div id='main'>";
     $wybor="SELECT * FROM `gkarta` WHERE imie='$nick'";
	$result = $conn->query($wybor);
	$d=0;
		if($row = $result->fetch_assoc()) 
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
					$obrana_wintrydze=$wartosci[6]+$wartosci[19]+$wartosci[21];
					$obrona_w_walce=$wartosci[5]+$wartosci[19]+$wartosci[18];
					$opanowanie=$wartosci[16]*3;
					$zycie=$wartosci[22]*3;
					echo "</tbody></table>
					<div class='punkty'>
					<p>Obrona w intrydze</p>
					".$obrana_wintrydze."
					</div>
					<div class='punkty'>
					<p>obrona w walce</p>
					".$obrona_w_walce."
					</div>
					<div class='punkty'>
					<p>Punkty opanowania</p>
					".$opanowanie."
					</div>
					<div class='punkty'>
					<p>Punkty życia</p>
					".$zycie."
					</div>";
			}
		
	else
	{
		//zrobic wyswietlenie bledu
		echo "bład sql".$conn->error;
	}
	echo "</div>";
			include 'reklama.php';
			include 'stopka.php';
			echo "</body>
</html>";