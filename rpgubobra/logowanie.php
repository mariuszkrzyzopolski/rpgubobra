<?php 

session_start();	

echo '<!DOCTYPE HTML>

<html lang="pl">

<head>

	<meta charset="utf-8" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	

        <script src="script.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">

       

        </script>

	

	<title>RPG u Bobra</title>

	

	<meta name="description" content="Strona o tematyce rpg i planszówek, stworzona na potrzeby zgromadzenia i zarządzania kartami postaci moich graczy" />

	<meta name="keywords" content="rpg,planszowki,wiedzmin,skyrim,gra o tron,horror w Arkham,boardgames,roleplaying games" />

	<meta name="robots" content="nofollow">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Fira+Sans+Extra+Condensed|Josefin+Sans&amp;subset=latin-ext" rel="stylesheet">

    </head>

<body onload="zegarek();">

<div id="container">';

include 'naglowek.php';

     include 'menu.php';

	echo "<div id='main'>";

//sprawdzenie czy ktos jest juz zalogowany,jesli tak daje mozliwosc wylogowania sie

	if((isset($_SESSION['login_flag']))&&($_SESSION['login_flag']==true))

{

 echo "Jestes juz zalogowany <a href='logout.php'>wyloguj się</a> albo <a href='index.php'>wroc na strone glowna</a>";

}

else

{

//formularz logowania i rejestracji

	echo  '	

<div class="loguj">

	<form action="loguj.php" method="post">

		Login: <br/> <input type="text" name="login" /> <br/>

		Hasło: <br/> <input type="password" name="password" /> <br/>

		<input type="submit" value="Zaloguj się" />

		</div>

		<div class="loguj">

	</form>

	<form action="rejestracja.php" method="post">

		Login: <br/> <input type="text" name="login" /> <br/>

		Hasło: <br/> <input type="password" name="password" /> <br/>

		Jakiego koloru jest kosc przeznaczenia ? <br/> <input type="text" name="przeznaczenie" /> <br/>

		Jak na imie miała pierwsza postać mistrza gry w wiedźminie <br/> <input type="text" name="postac" /> <br/>

		<input type="submit" value="Zarejestruj się" />

	</form>

	</div>';

if(isset($_SESSION['blad']))	{echo $_SESSION['blad'];}}

	echo "</div>

			";include 'reklama.php';

			include 'stopka.php';

			echo"		

</body>

</html>";

?>