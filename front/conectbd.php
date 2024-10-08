<?php
	//Infos para conexão com BD
	$servidor="localhost";
	$banco="cyberinterpro";
	$usuario="root";
	$senha="";
	
	global $pdo;
	global $_SESSION;

	// Tentativa de conexão, caso falhe exibe mensagem de erro
	try{
	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
	//echo "Conexão realizada com sucesso!";
	//echo "</br>";
	}catch(PDOException $err) {
		echo "Conexão falhou, erro: " . $err->getMessage();
	}
	
?>