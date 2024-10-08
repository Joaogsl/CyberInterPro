<?php
    include('verificar-login.php');
    include('conectbd.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="stylesheet" href="css/certificado1.css">
    <link rel="stylesheet" href="css/menu.css">

    <title>Document</title>
</head>
<body onload="EsconderForm()">

    <?php
        include ('menu.php');

    ?>
    <section class="mb-5">
        <div class="mt-5">
            <h1 class="titulo">Geração de Certificado</h1>
            <?php
                include "ProgressBarCert.html";

            ?>
        </div>
        <div class="container text-center">
        
            <form action="salvar-certificado.php" method="post">
                <p class="mb-2 mt-2 instrucao">Escolha o tipo de Certificado que deseja emitir</p>
                <div class="formulario" id="selecionar">
                    <div class="input-group flex-nowrap inputs">
                        <div class="align-self-center ms-3 me-3">
                            <img src="assets/certificado_cinza.png" alt="" srcset="">
                        </div>
                        <select name="tipo_cert" class="form-select insert" id="tipo" aria-label="Default select example" onchange="TrocarForm(this.value)">
                            <option value="0" disabled selected>Tipo do Certificado</option>
                            <option value="juridico">Pessoa Jurídica</option>
                            <option value="fisico">Pessoa Física</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>    
        <div class="container text-center">
            <form action="salvar-certificado.php"  method="post" novalidate>
                <p class="mt-5 mb-2 instrucao" id="pform">Insira os dados solicitados</p>
                <!-- <div class="formulario" id="fisica">
                    <div class="input-group flex-nowrap inputs">
                        <div class="align-self-center ms-3 me-3">
                            <img src="assets/nome.png" alt="" srcset="">
                        </div>
                        <input type="text" class="form-control insert" name = "nome" id="usernamefis" placeholder="Nome" aria-label="Username" aria-describedby="addon-wrapping" required>
                    </div>
                    <div class="input-group flex-nowrap inputs">
                        <div  class="align-self-center ms-3 me-3">
                            <img src="assets/cpf.png" alt="" srcset="">
                        </div>
                        <input type="text" class="form-control insert" name = "cpf" id="cpf" placeholder="CPF" aria-label="CPF" aria-describedby="addon-wrapping" required>
                    </div>
                    <div class="input-group flex-nowrap inputs" data-bs-toggle="tooltip" data-bs-title="Sua senha deve conter 8-20 caracteres, letras, números e caracteres especiais." data-bs-trigger="focus" >
                        <div  class="align-self-center ms-3 me-3">
                            <img src="assets/cadeado_cinza.png" alt="" srcset="">
                        </div>
                        <input type="password" class="form-control insert" id="senhafis" name= "senha"  placeholder="Senha" aria-label="Senha" aria-describedby="addon-wrapping" required>
                        <div class="align-self-center ms-3 me-3" >
                            <img src="assets/olho_cinza.png" onclick="MostrarOcultarSenhaFis()" alt="" srcset="">
                        </div>
    
                    </div>
                    <div class="mt-4">
                         <button class="btn btn-outline-primary botao" id="btn_secundario" type = “reset”>Cancelar</button>
                        <button class="btn botao" id="btn_primario" type="submit" onclick="Progresso2()"> Gerar </button>
                    </div>
                </div> -->
                <div class="formulario" id="juridica">
                    <div class="input-group flex-nowrap inputs">
                        <div class="align-self-center ms-3 me-3">
                            <img src="assets/nome.png" alt="" srcset="">
                        </div>
                        <input type="text" class="form-control insert" name = "nome" id="usernamejuri" placeholder="Nome ou Razão Social" aria-label="Username" aria-describedby="addon-wrapping" required>
                    </div>
                    <div class="input-group flex-nowrap inputs">
                        <div  class="align-self-center ms-3 me-3">
                            <img src="assets/cpf.png" alt="" srcset="">
                        </div>
                        <input type="text" class="form-control insert" name = "cpf" id="cnpj" placeholder="CPF ou CNPJ (somente números)" aria-label="CNPJ" aria-describedby="addon-wrapping" required>
                    </div>
                    <div class="input-group flex-nowrap inputs" data-bs-toggle="tooltip" data-bs-title="Sua senha deve conter 8-20 caracteres, letras, números e caracteres especiais." data-bs-trigger="focus" >
                        <div  class="align-self-center ms-3 me-3">
                            <img src="assets/cadeado_cinza.png" alt="" srcset="">
                        </div>
                        <input type="password" class="form-control insert" name = "senha" id="senhajuri"  placeholder="Senha" aria-label="Username" aria-describedby="addon-wrapping" required>
                        <div class="align-self-center ms-3 me-3" >
                            <img src="assets/olho_cinza.png" onclick="MostrarOcultarSenhaJuri()" alt="" srcset="">
                        </div>
    
                    </div>
                    <div class="mt-4">
                        <!-- <button class="btn btn-outline-primary botao" id="btn_secundario" type = “reset”>Cancelar</button>  -->
                        <button class="btn botao" id="btn_primario" type="submit" onclick="Progresso2()" onclick="UpdateProgressBar()">Gerar</button>
                    </div>
                </div> 
                
            </form>
        </div>
    </section>

    <?php
        // include "footer.html";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="js/certificado.js"></script>
</body>
</html>