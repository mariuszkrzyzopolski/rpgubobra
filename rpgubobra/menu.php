<?php
echo "<div id='menu'>";
	if (isset($_SESSION['login_flag']))
	{
	//wyswietlenie loginu poprzez sejse i mozliwosc wylogowania sie
	echo "<p>Witaj ".$_SESSION['login']."</p><br/><a href='logout.php' class='guzik-menu szary'>Wyloguj się</a>";
}
	echo	"<h1>Menu</h1>
		<a href='index.php' class='guzik-menu szary'>Strona główna</a>
		<a href='logowanie.php' class='guzik-menu szary'>Zaloguj sie</a>
		<a href='zbior.php' class='guzik-menu szary'>Zbiór</a>
        <a href='cmentarz.php' class='guzik-menu szary'>Cmentarz postaci</a>
        <a href='mapa.php' class='guzik-menu szary'>Mapa strony</a>
		<a href='kontakt.php' class='guzik-menu szary'>Kontakt z autorem</a>                
	</div>";
	?>