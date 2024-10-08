<?php

    include('conectbd.php');

    $name = $_POST['nome'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $datah = date('Y/m/d');
    $datav = date('Y/m/d', strtotime($datah. ' + 3 years'));

    $stmt = $pdo->prepare("insert into tbcertificado values (null, 'Software', '$name', '$cpf' , '$senha','$datah', '$datav', null)");
    $stmt ->execute();

    header("location:../aws/request_api_ps.php?nome=$name&cpf=$cpf&senha=$senha");

?>