<?php
session_start();
//sprawdzenie poprawnosci odpowiedzi
if((($_POST['przeznaczenie'])!='czerwonego')||($_POST['postac']!='Frednar'))
{
	$_SESSION['blad'] = 'nieprawidłowa odpowiedz!';
	header('Location: logowanie.php');
	exit();
}
else
{
if((!isset($_POST['login']))||(!isset($_POST['password'])))//sprawdzenie czy haslo i login sa wpisane
{
	$_SESSION['blad'] = 'uzueplnij haslo!';
	header('Location: logowanie.php');
	exit();
}
//dostosowac do serwera rpgubobra
include 'polaczenie.php';
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
	{
		echo "Error: ".$conn->connect_error;
	}
	else
	{
		$login=$_POST['login'];
		$password=$_POST['password'];
		$zapytanie="INSERT INTO `gracze` (`login`, `password`) VALUES ('$login',PASSWORD('$password'))";
		if($result=$conn->query($zapytanie))
		{
			//ustawienie flagi zalogowania i przeniesienie do formularze wiedzmina
			$_SESSION['login_flag']=true;
			$_SESSION['login']=$login;
			unset($_SESSION['blad']);
			header('Location: wiedzm.php');
			
		}
		$conn->close();
	}
}
?>