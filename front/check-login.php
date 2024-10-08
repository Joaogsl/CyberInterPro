<?php
session_start();
include('conectbd.php');
 
if(empty($_POST['email']) || empty($_POST['senha'])) {
    header("location:login.php");
    exit();
} 

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "select * from tbusuario where email='$email' and senha =md5('$senha')";
$result = $pdo->prepare($query);

$result->execute();
$check = $result->fetch(PDO::FETCH_BOTH);
print_r($check);
if($check[0] >= 1) {
    $_SESSION['userid'] = $check[0];
    $_SESSION['user'] = $check[1];
    $_SESSION['email'] = $check[2];
    $_SESSION['telefone'] = $check[3];
    $_SESSION['cpf'] = $check[4];
    header('location:home_cliente.php');
    exit();
} else {
    $_SESSION['semperm'] = true;
    header('location:login.html');
    exit();
}
?>