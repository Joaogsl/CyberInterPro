<?php
    include('verificar-login.php');
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/assinatura.css">
    <link rel="stylesheet" href="css/main1.css">    
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="../aws/css/request.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="pdf/mostrarpdf.js"></script>
    <script src="pdf/pdf.js"></script>
    <title> Baixar Certificado </title>
    <script src="https://unpkg.com/pdf-lib@1.4.0"></script>
    <script src="https://unpkg.com/downloadjs@1.4.7"></script>
</head>
<body onload="Progresso3()">
    <?php
        include "conectbd.php";
        include "menu.php";
        ?>
    <section id="assinatura" >
        <div class="mt-5 text-center justify-content-center">
            <h1 class="titulo">Assinatura de Arquivos</h1>
            <?php
                include "ProgressBarAssina.html";

            ?>
        </div>
    </section>
    <section>
        <div id="container" class="d-flex text-center justify-content-center align-items-center">
            <div id="centralizar"  >	
                <p class="" id="frase1">Seu arquivo foi assinado com <span>sucesso!</span></p>
                <p class="" id="frase2">Clique abaixo e faça o download do arquivo assinado.</p>
                <div id="esc-arquivo">
                    <a href="exports/pdfAssinado.pdf" class='btn btn-primary rounded-pill entrar_text  d-md-inline-block d-flex flex-sm-column btn_land mt-md-3 mb-md-0 mb-2' id='btn_down_assi' target="_blank">Aqui está seu arquivo!</a>
                </div>
            </div>
        </div>
    </section>
    <?php   
        include "footer.html";
    ?>
<script src="js/assinatura.js"></script>
</body>
</html>