<?php
    include('conectbd.php');
    include('verificar-login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/usuario.css">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/usuario.js"></script>
</head>
<body>
    <?php
        include "menu.php";
    ?>
    <section id="assinatura">
        <div class="container pt-md-0 pt-5 pb-0" >
            <div class="row-as">
                <div class="col-md-11 col-sm-11 align-self-center mt-4" id="titulo">
                    <div class="d-inline" >
                        <h1 class="titulo d-inline-flex ">Seu perfil</h1>
                    </div>
                    <div class="d-inline"id="alterar-senha">
                        <a class="d-inline nav-link chave" href="perfil.php">
                        <img src="assets/Grupo 188.png" alt="" srcset="" class="mt-1">
                        Alterar Senha</a>
                    </div>
                    <span id="msgAlerta"></span>
                </div>
                <div class="col-md-11 col-sm-11 info shadow p-2 mb-5 bg-body rounded" id="info-basico">
                    <h3 class="titulo2 d-inline-flex ms-2">Informações Básicas</h3>
                    <table class="info-text list-group">
                        <?php

                             $id = $_SESSION['userid'];
                             $stmt = $pdo->prepare("select * from tbusuario where userid = '$id'");	
                             $stmt ->execute();
                             $row = $stmt ->fetch(PDO::FETCH_BOTH);
                        ?>
                        <tr class="list-group-item m-2 rounded">
                            <td class="pt-2 pb-2">
                                Id:
                            </td>
                            <td class="td_info" id='valor_id'>
                                <h1 class="d-inline info-usu"> <?php echo "$_SESSION[userid]"?></h1> 
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr class="list-group-item m-2 rounded">
                            <td>
                                Foto:
                            </td>
                            <td class="td_info">
                                <img src="assets/Icon awesome-user-circle.png" id='valor_foto' class="info-usu">
                            </td>
                            <td class="td_but">
                                <button type='button' id='botao_editar' class='but-edi ' onclick='editar_registro2("<?php echo "$_SESSION[userid]"?>")'> Editar </button>
                                <button type='button' id='botao_salvar' class='but-salva' onclick='salvar_registro("<?php echo "$_SESSION[userid]"?>")' style='display:none;'> Salvar </button>
                            </td>
                        </tr>
                        <tr class="list-group-item m-2 rounded">
                            <td>
                                Nome:
                            </td>
                            <td class="td_info" >
                                <h1  class="d-inline info-usu" id='valor_nome'> <?php echo ucfirst("$row[1]")?></h1>
                            </td>
                            <td class="td_but">
                                <button type='button' id='botao_editar1' class='but-edi' onclick='editar_registro1("<?php echo "$_SESSION[userid]"?>")'> Editar </button>
                                <button type='button' id='botao_salvar1' class='but-salva' onclick='salvar_registro1("<?php echo "$_SESSION[userid]"?>")' style='display:none;'> Salvar </button>
                            </td>
                        </tr>
                        <tr class="list-group-item m-2 rounded">
                            <td>
                                CPF:
                            </td>
                            <td class="td_info">
                                <h1 class="d-inline info-usu" id='valor_cpf'> <?php echo ucfirst("$row[4]")?> </h1>
                            </td>
                            <td class="td_but">
                                <button type='button' id='botao_editar2' class='but-edi ' onclick='editar_registro2("<?php echo "$_SESSION[userid]"?>")'> Editar </button>
                                <button type='button' id='botao_salvar2' class='but-salva' onclick='salvar_registro2("<?php echo "$_SESSION[userid]"?>")' style='display:none;'> Salvar </button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-11 col-sm-11 info shadow p-2 mb-5  bg-body rounded" id="info-contato">
                    <span id="msgAlerta1"></span>
                    <h3 class="titulo2 d-inline-flex ms-2">Informações de Contato</h3>
                    <table class="info-text list-group">
                        <tr class="list-group-item m-2 rounded">
                            <td>
                                Email: 
                            </td>
                            <td class="td_info">
                                <h1 class="d-inline info-usu" id="valor_email"><?php echo"$row[2]"?></h1>
                            </td>
                            <td class="td_but">
                                <button type='button' id='botao_editar3' class='but-edi ' onclick='editar_registro3("<?php echo "$_SESSION[userid]"?>")'> Editar </button>
                                <button type='button' id='botao_salvar3' class='but-salva' onclick='salvar_registro3("<?php echo "$_SESSION[userid]"?>")' style='display:none;'> Salvar </button>
                            </td>
                        </tr>
                        <tr class="list-group-item m-2 rounded">
                            <td>
                                Telefone:
                            </td>
                            <td class="td_info">
                                <h1 class="d-inline info-usu" id="valor_tel"><?php echo"$row[3]"?></h1>
                            </td>
                            <td class="td_but">
                                <button type='button' id='botao_editar4' class='but-edi ' onclick='editar_registro4("<?php echo "$_SESSION[userid]"?>")'> Editar </button>
                                <button type='button' id='botao_salvar4' class='but-salva' onclick='salvar_registro4("<?php echo "$_SESSION[userid]"?>")' style='display:none;'> Salvar </button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div> 
        </div>
    </section>
    <?php   
        include "footer.html";
    ?>
</body>
</html>