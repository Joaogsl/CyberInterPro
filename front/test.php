<?php
$_UP['pasta'] = 'pdf/';
$_UP['extensoes'] = array('pdf');
$_UP['renomeia'] = false;

if (1 == 2){

}
else {
    if ($_UP['renomeia'] == true) {
    $nome_final = time().'.jpg';
    } else {
    $nome_final = $_FILES['pdf'];
    }
if (move_uploaded_file($_FILES['pdf']['tmp_name'], $_UP['pasta'] . $nome_final)) {
    // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
    echo "Upload efetuado com sucesso!";
    echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
    } else {
    // Não foi possível fazer o upload, provavelmente a pasta está incorreta
    echo "Não foi possível enviar o arquivo, tente novamente";
    }
}
header('Location: assinatura.php');
?>