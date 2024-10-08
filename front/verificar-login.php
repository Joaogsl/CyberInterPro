<?php
session_start();

if(!isset($_SESSION['user'])){
	header('Location: index.php');
	exit;
}
if(!isset($_SESSION['email'])){
	header('Location: index.php');
	exit;
}
if(!isset($_SESSION['telefone'])){
	header('Location: index.php');
	exit;
}

?>