<?php
session_start();
		$_SESSION['imie'] = $_POST['imie'];
		$_SESSION['nazwisko'] = $_POST['nazwisko'];
		$_SESSION['dataud'] = $_POST['dataud'];
		$_SESSION['pesel'] = $_POST['pesel'];
		$_SESSION['wiek'] = $_POST['wiek'];
		$_SESSION['plec'] = $_POST['plec'];
		$_SESSION['kierunek'] = $_POST['kierunek'];
		header('Location: session_data.php');
?>