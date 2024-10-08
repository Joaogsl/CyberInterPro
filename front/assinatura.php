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
    <link rel="stylesheet" href="css/assinatura.css">
    <link rel="stylesheet" href="css/main1.css">    
    <link rel="stylesheet" href="css/menu.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="pdf/mostrarpdf.js"></script>
    <script src="pdf/pdf.js"></script>
    <title> Assinatura </title>
    <script src="https://unpkg.com/pdf-lib@1.4.0"></script>
    <script src="https://unpkg.com/downloadjs@1.4.7"></script>
</head>
<body onload="Progresso1()">
    <?php
        include "menu.php";
    ?>
    <section id="assinatura" class="mb-5">
        <div class="mt-5  text-center justify-content-center">
            <h1 class="titulo ">Assinatura de Arquivos</h1>
            <?php
                include "ProgressBarAssina.html";

            ?>
        </div>
    </section>
    <section>
        <div class="container text-center align-self-center" id="esc-arquivo">
            <form action="test.php" method="post" enctype="multipart/form-data">
                <input type="file" class="form-control mb-3 pdf" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" accept=".pdf" name="pdf">
                <h5 class="pdf_text ms-2"> Escolha somente arquivos com extensão .pdf </h5>
                <!-- <input type="submit" value="Validar PDF"  name="submit" class="but_pdf btn" >  -->
                <div class="mt-4 container text-center align-self-center" id="prox">
                    <button class="btn" id="btn_primario" type="submit">Validar</button>
                </div>
            </form>
        </div>
        <div class="container text-center align-self-center mt-2 mb-5">
            <iframe src="pdf/Array" width="100%" height="700" class="pdf_viewer">
            </iframe>
        </div>
    </section>
        <!-- <div id="prox" class="container text-center align-self-center">
        <a href="inserir-certificado.php">Próximo</a>
    </div> -->
    <div class="container text-center align-self-center" id="prox">
        <button class="btn" id="btn_primario"><a href="inserir-certificado.php">Próximo</a></button>
    </div>
        <?php   
        include "footer.html";
        ?>
<script src="js/assinatura.js"></script>
</body>
</html>