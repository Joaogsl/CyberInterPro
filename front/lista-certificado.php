<?php
include "conectbd.php";
include "verificar-login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lista-certificado.css">
    <link rel="stylesheet" href="css/main1.css">    
    <link rel="stylesheet" href="css/menu.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.min.js"></script>
    <title> Lista de Certificado</title>
</head>
<body>
    <?php
        include "menu.php";
        
    ?>
    <section id="assinatura">
        <div class="container pt-md-0 pt-5 pb-0" >
            <div class="row-as mt-3">
                <div class="col-md-12 col-sm-12 align-self-center mt-4 " id="titulo">
                    <h1 class="titulo">Lista de Certificados</h1>
                </div>
            </div>
            <div class='shadow mb-5'  id='atividades'>
            <?php
            $cpf = $_SESSION['cpf'];
           
            $stmt = $pdo->prepare("select * from tbcertificado where cpf = '$cpf'");	
            $stmt ->execute();
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
            echo"
                <div class='arquivos row mb-2 shadow' id=''>
                    <div class='col-1 content-flex'>
                        <img class='icone' src='assets/icon_certificado1.svg' alt='' srcset=''>
                    </div>
                    <div class='col-5 content-block '>
                        <p class='dados'>Nome do Titular: ". ucfirst($row[2]) ."</p>
                        <p class='dados'>Padrão: ". ucfirst($row[1]) ."</p>    
                        <p class='dados datas' id='emissao'>Data de Emissão: ". $row[5] ."</p> 
                        <p class='dados datas' id='validade'>Data de Validade: ". $row[6] ."</p> 
                    </div>
                    <div class='col-3'>
                        
                    </div>
                    <div class='col-3 content-block d-flex flex-column' id='baixar_direita'>
                        <div id='baixar' class=''>
                            <a href='../aws/request_api_ps.php?nome=$row[2]&cpf=$row[3]&senha=$row[4]'>Download</a>
                            <a href='excluir-cert.php?id=$row[0]'>- Excluir</a>
                        </div>
                    </div>
                </div>";
            }
            ?>
            </div>
        </div>
    </section>
    <?php   
        include "footer.html";
    ?>
</body>
</html>