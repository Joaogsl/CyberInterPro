<?php
include 'conectbd.php';
session_start();

if(empty($_POST['senhaa']) || empty($_POST['senhan']) || empty($_POST['email']) ) {
    header("location:perfil.php");
    exit();
} 
$senhaa = $_POST['senhaa'];
$senhan = $_POST['senhan'];
$email = $_POST['email'];

$query = "select senha, email from tbusuario where email='$email'";
$result = $pdo->prepare($query);
$result->execute();
$check = $result->fetch(PDO::FETCH_BOTH);

$md5senhaa = md5($senhaa);

if ($check > 0) {
    echo "<p> Senha atual invalida </p>";
    if($check[0] == $md5senhaa) {
        $code = "update tbusuario set senha = md5('$senhan') where email='$email'";
        $alterar = $pdo->prepare($code);
        $alterar->execute();
        echo "Senha alterada com sucesso";
        header("location:usuario.php");
    }
}
else {
    echo "<p> O Email fornecido é invalido </p>";
}
?>