<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main1.css">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/forca_senha copy.css">
</head>
<body>
    <section>
        <div id="alt_senha" onclick="AltSenha()">
            <img src="assets/Grupo 188.png" alt="" srcset="" class="d-inline-flex align-items-center">
            <p class="d-inline-flex align-items-center">Alterar Senha</p>
        </div>
    </section>
    <section id="sec_alt_senha">
        <div class="container text-center">
            <form id="form_alt_senha" action="alterar_senha.php" method="post">
                <div id="formulario">
                    <p class="mt-4" id="tit_alt_senha">Alterar Senha</p>
                    <div class="input-group flex-nowrap inputs m-4" data-bs-toggle="tooltip" data-bs-title="Sua senha deve conter 8-20 caracteres, letras, números e caracteres especiais." data-bs-trigger="focus" >
                        <div  class="align-self-center ms-3 me-3">
                            <img src="assets/cadeado_cinza.png" alt="" srcset="">
                        </div>
                        <input type="text" class="form-control insert" id="email" name="email"  placeholder="Email da conta" aria-label="Username" aria-describedby="addon-wrapping"required>
                    </div>

                    <div class="input-group flex-nowrap inputs m-4" data-bs-toggle="tooltip" data-bs-title="Sua senha deve conter 8-20 caracteres, letras, números e caracteres especiais." data-bs-trigger="focus" >
                        <div  class="align-self-center ms-3 me-3">
                            <img src="assets/cadeado_cinza.png" alt="" srcset="">
                        </div>
                        <input type="password" class="form-control insert" id="confsenha" name="senhaa"  placeholder="Senha Atual" aria-label="Username" aria-describedby="addon-wrapping"required>
                        <div class="align-self-center ms-3 me-3" >
                            <img src="assets/olho_cinza.png" onclick="MostrarOcultarConfSenha()" alt="" srcset="">
                        </div>
                    </div>

                    <div class="input-group flex-nowrap inputs m-4" data-bs-toggle="tooltip" data-bs-title="Sua senha deve conter 8-20 caracteres, letras, números e caracteres especiais." data-bs-trigger="focus">
                        <div class="align-self-center ms-3 me-3">
                            <img src="assets/cadeado_cinza.png" alt="" srcset="">
                        </div>
                        <input onkeyup="trigger()" onfocusout="FocusOut()" type="password" name="senhan" class="form-control insert" id="senha"  placeholder="Senha Nova" aria-label="Username" aria-describedby="addon-wrapping" required>
                        <div class="align-self-center ms-3 me-3 " >
                            <img src="assets/olho_cinza.png" onclick="MostrarOcultarSenha()" alt="" srcset="">
                        </div>
                    </div>
                    <div class="indicator">
                        <span class="weak"></span>
                        <span class="medium"></span>
                        <span class="strong"></span>
                        <div class="text p-2"></div>
                    </div>
                </div>
                <div class="mt-3 mb-4 d-flex justify-content-evenly">
                    <button class="btn btn-outline-primary botao" id="cancelar">Cancelar</button>
                    <button class="btn btn-primary botao" id="alterar" type="submit">Alterar</button>
                </div>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="JS/bootstrap.min.js"></script>
        <script src="js/forca_senha.js"></script>
        <script src="js/login_cadastro.js"></script>
        <script src="js/perfil.js"></script>
</body>
</html>