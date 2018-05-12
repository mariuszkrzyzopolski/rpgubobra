<?php
session_start();
if((!isset($_POST['login']))||(!isset($_POST['password'])))
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
		$zapytanie="SELECT * FROM gracze WHERE login='$login' AND password=PASSWORD('$password')";
		$result=$conn->query($zapytanie);
		if($result=$conn->query($zapytanie))
		{
			if($record = $result->fetch_assoc())
			{
				$_SESSION['login_flag']=true;
				$_SESSION['login']=$record['login'];
				unset($_SESSION['blad']);
				$result->free_result();
				header('Location: wiedzm.php');
			}
			else
			{
				$_SESSION['blad'] = 'Nieprawidłowy login lub hasło!';
				header('Location: logowanie.php');
			}
		}
		$conn->close();
	}
	?>