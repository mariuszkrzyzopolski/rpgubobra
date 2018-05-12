<?php

session_start();

//dzieki sesji menu.php moze pokazac login

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

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Fira+Sans+Extra+Condensed|Josefin+Sans&amp;subset=latin-ext" rel="stylesheet">

</head>



<body onload="zegarek();">

<div id="container">

    <?php   include 'naglowek.php'; 

            include 'menu.php'; 

    ?>

	<div id="main">

            <h1>Cmentarz postaci</h1>

        <div class="lewy">

            <h4>wiedzmin Tm</h4>

            <ol>

                

                <li>Gnom Bard</li>

                <li>Dwójka szalonych magów ważących eliksir w karczmie</li>

                <li>Lipa Mag</li>

                <li>Chłopiec, który żarł kamienie</li>

                <li>Puk, który czerpał mane z mchu</li>

                <li>Astrolożka z goblinami(?)</li>

                <li>NieJanek</li>

                

            </ol>

        </div>

        <div class="lewy">

            <h4>wiedzmin Novigradzko-studencki</h4>

            <ol>

                <li>Elf, który umiał polować</li>

                <li>Mag z targu warzywnego</li>

                <li>Figitz Merluzzo(?)</li>

            </ol>

        </div>

        <div class="lewy">

            <h4>Skyrim</h4>

            <ol>

                <li>Bohater broniący drużyne przed wampirem,<br> zastrzelony przez sojuszników</li>

            </ol>

        </div>



         

	</div>

	<?php include 'reklama.php';?>

	<?php include 'stopka.php';?>

</body>

</html>