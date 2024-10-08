<?php
include "conectbd.php";

    $id = $_GET['id'];
if(!empty($id)) {
    $stmt = $pdo->prepare("delete from tbcertificado where certificadoid = '$id'");	
    $stmt ->execute();
    header("location:lista-certificado.php");
}else {
    echo "Certificado não encontrado";
}
?>