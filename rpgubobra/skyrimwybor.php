<?php
//dostosowac do serwera rpgubobra;
include 'polaczenie.php';
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($_SERVER["REQUEST_METHOD"]=="POST")
	$nick=$_POST['nick'];
	$wybor="SELECT * FROM `skarta` WHERE imie='$nick'";
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
	<link rel="stylesheet" type="text/css" href="skarta.css">
        <link rel="stylesheet" type="text/css" href="wkarta.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Fira+Sans+Extra+Condensed|Josefin+Sans&amp;subset=latin-ext" rel="stylesheet">
    </head>
<body onload="zegarek();">
<div id="container">';
include 'naglowek.php';
     include 'menu.php';
     echo "<div id='main'><div id='wyswietl'>";
     $i=0;
     if($row = $result->fetch_assoc()) 
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
			echo "</div></div>";
			include 'reklama.php';
			include 'stopka.php';
			echo "</body>
</html>";