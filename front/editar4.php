<?php
include('verificar-login.php');
include('conectbd.php');

$dados= filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($dados['userid'])){
    $retorna = ['status'=> false, 'msg'=> "<div class='alert alert-warning' role='alert'> Erro: Necessário enviar o id! </div>"];}
else{
    $query_usuario = "UPDATE tbusuario SET telefone=:tel WHERE userid=:id";
    $edit_usuario = $pdo->prepare($query_usuario);
    $edit_usuario-> bindParam(':tel', $dados['tel']);
    $edit_usuario-> bindParam(':id', $dados['userid']);}

if($edit_usuario->execute()){
    $retorna = ['status'=> true, 'msg'=> "<div class='alert alert-success' role='alert'> Usuário editado com sucesso </div>"];
}else
    $retorna = ['status'=> false, 'msg'=> "<div class='alert alert-warning' role='alert'> Erro: Não foi possível fazer edição! </div>"];
echo json_encode($retorna);


