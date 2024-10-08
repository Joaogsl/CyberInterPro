<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="stylesheet" href="css/Inicial.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/logo/2 colors favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/logo/2 colors favicon.ico" type="image/x-icon">

    <script type="text/javascript" src="js/funcoes.js"></script>
    <title>CyberInterPro - Home</title>

</head>
<body>
    <!--MENU - NAVBAR*/-->
    <?php
        include "menu_inicial.html";
    ?>
    <!-- Landing -->
    <section id="landing">
        <div class="container pt-md-0 pt-5 pb-0" >
            <div class="row ">
                <!-- Esquerda -->
                <div class="col-md-6 col-sm-12 align-self-center mb-md-0 mb-4 ">
                    <h1 id="titulo_land" class="titulo">Segurança dos seus arquivos garantida com Criptografia!</h1>
                    <h4 id="subtitulo_land" class="mb-3 mt-3 subtitulo">Vamos garantir a segurança de seus arquivos de maneira prática e confiável, por meio de Certificados e Assinaturas Digitais!</h4>
                    <a href="cadastro.html" class="btn btn-primary rounded-pill entrar_text  d-md-inline-block d-flex flex-sm-column btn_land mb-md-0 mb-2 me-md-2" id="btn_cad">Cadastre-se</a>
                    <a href="login.html" class="btn btn-primary rounded-pill entrar_text  d-md-inline-block d-flex flex-sm-column btn_land" id="btn_cad">Entrar</a>
                </div>
                <!-- Direita -->
                <div class="col-md-6 col-sm-12 text-center" id="img_principal">
                    <img src="assets/Img Home Principal.svg"  alt="Homem assinando um certificado em frente a um computador" class="img_fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- SVG ONDA -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="onda"><path fill="#ffffff" fill-opacity="1" d="M0,256L48,245.3C96,235,192,213,288,213.3C384,213,480,235,576,234.7C672,235,768,213,864,186.7C960,160,1056,128,1152,101.3C1248,75,1344,53,1392,42.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        
    <!-- Sobre -->
    <section id="sobre">
        <div class="container pt-md-0 pt-5 pb-5" id="cont_sobre">
            <div class="row">
                <!-- Imagem -->
                <div class="col-md-6 col-sm-12 text-center mb-md-0 mb-4 order-md-1 order-2">
                    <img src="assets/teste certificado.svg" alt="Certificado saindo de um computador com um selo de verificado e um cadeado em cima" class="img_fluid" id="img_sobre">
                </div>
                <!-- Texto -->
                <div class="col-md-6 align-self-center order-mb-2 order-1">
                    <h1 id="titulo_sobre" class="titulo">Quem quer <span>segurança</span> tem que se proteger!</h1>
                    <h4 id="subtitulo_sobre" class="mb-3 mt-3 subtitulo">Com a geração de Certificados Digitais você adquire uma identidade virtual, o qual, por meio de nossa plataforma, pode ser utilizado para assinar arquivos digitalmente, assegurando proteção, validade jurídica e sustentabilidade de maneira gratuita!</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Ferramentas -->
    <section id="ferramentas">
        <div class="container pt-5 text-center" >
            <!-- Título -->
            <h1 id="titulo_ferra" class="titulo ">Nossas Ferramentas</h1>
            <h4 id="subtitulo_ferra" class="mb-5 mt-4 subtitulo">No mundo digital utilizamos algumas estratégias e ferramenras para defender informações importantes de possíveis fraudes e aqui você pode utilizá-las de maneira gratuita!</h4>
            <div class="row justify-content-evenly mb-5">
                <!-- COntainer 1 -->
                <div class="col-md-6  mb-4 cards ">
                    <a href="#" class="destaque">
                        <div clss="img-container mb-3 ">
                            <img src="assets/Certificado Digital Img1.svg" alt="Computador com um certificado verificado nele" class="img_fluid">
                        </div>
                        <h5>Certificado Digital</h5>
                        <p mb-0>Gere Certificados Digitais e obtenha identidade virtual para trocas seguras de informação nos meios eletrônicos</p>
                    </a>
                </div>
                <!-- COntainer 2 -->
                <div class="col-md-6 mb-4 cards">
                    <a href="#"  class="destaque">
                        <div clss="img-container mb-3 destaque" >
                            <img src="assets/Assinatura Digital Img.svg" alt="Pessoa assinando certificado digital pelo celular" class="img_fluid" id="assina">
                        </div>
                         <h5>Assinatura de Arquivos</h5>
                        <p mb-0>Garanta autenticidade, confidencialidade, integridade e não repúdio por meio da Assinatura Digital</p>
                    </a>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Vantagens -->
    <section id="vantagens">
        <div class="container pt-5 text-center" >
            <!-- Título -->
            <h1 class="titulo">Por que escolher nossos serviços?</h1>
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-md-4 col-sm-12 me-5 card_vant">
                    <div clss="img-container" >
                        <img src="assets/Dinheiro.svg" alt="Nota de dinheiro com um X em cima" class="img_fluid" class="icon_vant">
                        <h5>Sem Custo</h5>
                        <p mb-0>Oferecemos uma plataforma aberta aos usuários</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 col-sm-12 me-5 card_vant d-flex align-items-end" id="baixo">
                    <div clss="img-container" >
                        <img src="assets/Lampada.svg" alt="Lâmpada com uma planta dentro" class="img_fluid" class="icon_vant">
                        <h5>Sustentável</h5>
                        <p mb-0>Ajude a natureza sem uso de papel, combustível fóssil e tinta</p>
                    </div>
                    
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 col-sm-12 card_vant">
                    <div class="img-container" >
                        <img src="assets/Pessoas.svg" alt="Duas pessoas carregando uma caixa" class="img_fluid" class="icon_vant">
                        <h5>Inclusivo</h5>
                        <p mb-0>Acesso à tecnologia de ponta para todos os usuários</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SVG ONDA -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="onda_baixo"><path fill="#ffffff" fill-opacity="1" d="M0,256L48,245.3C96,235,192,213,288,213.3C384,213,480,235,576,234.7C672,235,768,213,864,186.7C960,160,1056,128,1152,101.3C1248,75,1344,53,1392,42.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    
    <!-- FOOTER -->
    <footer class="container footer mt-0">
        <!-- Voltar Ao Topo -->
        <div id="topo" class="text-center">
            <a href="#landing " class="d-block">
                <img src="assets/Seta_esquerda.png" alt="" srcset="" style="transform:rotate(90deg);" class="d-inline-block img_prop " id="seta">
                <p>Voltar ao topo</p>
            </a>
            
        </div>
        <!-- Social Media -->
        <div class="d-flex justify-content-center sociais mt-3">
                <img src="assets/Intagram.png" class="social " id="Insta" alt="Logo do instagram">
                <img src="assets/Facebook.png" class="social" id="Face" alt="Logo do Facebook">
                <img src="assets/Youtube.png" class="social" id="You" alt="Logo do Youtube">
                <img src="assets/Linkedin.png" class="social" id="Link" alt="Logo do Linkedin">
                <img src="assets/Github.png" class="social" id="Git" alt="Logo do Github">
        </div>
        <!-- Copyright -->
        <div class="d-flex justify-content-center align-items-center mt-3 mb-3" id="copyright">
            <img src="assets/Copyright.png" alt="Selo de Copyright" class="me-2">
            <p>2022 InterPro Alguns direitos reservados</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>