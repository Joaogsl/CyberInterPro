<?php
include('conectbd.php');

if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['cellphone']) && !empty($_POST['senha']) && !empty($_POST['confsenha'])){
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $telefone = $_POST['cellphone'];
    $cpf = $_POST['cpf'];
    $pass = $_POST['senha'];
    $passconfirm = $_POST['confsenha'];

        if($pass == $passconfirm) {
            $stmt = $pdo->prepare("insert into tbusuario values (null, '$username', '$email', '$telefone', '$cpf', MD5('$pass'))");
            $stmt ->execute();
            header("location:login.html");
        }
    

}else {
    header("location:cadastro.html");
}

?>