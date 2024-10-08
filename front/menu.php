 <!--//HEADER-->
 <?php
    include "conectbd.php";
    $id = $_SESSION['userid'];
    $stmt = $pdo->prepare("select * from tbusuario where userid = '$id'");	
    $stmt ->execute();
    $row = $stmt ->fetch(PDO::FETCH_BOTH);
 ?>
 <div id="header" class="sticky-top">
    <div class="container p-0 ">
        <nav class="navbar navbar-expand-md ">
            <a class="navbar-brand" href="../front/home_cliente.php" >
                <img src="../assets/logo/2 colors full.png" alt="Logo" srcset="" class="img-fluid" width="189px">
            </a>
            <button class="navbar-toggler" id="btn_menu_close" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end m-0" id="navbarNav">
                <ul class="navbar-nav pe-2" >
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../front/home_cliente.php" >
                            <img src="../assets/home_preto.png" alt="" srcset="" class="d-inline-block img_prop" id="home">
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                            <div class="dropdown-center">
                                <a  class="nav-link fer" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/ferramentas_preto.png" alt="" srcset="" class="d-inline-block img_prop">
                                    <p>Ferramentas</p>
                                </a>
                                <ul class="dropdown-menu mt-2 menu-fer" onfocusout="FocusOut()" id="fer">
                                    <li><a href= "../front/certificado.php" class="dropdown-item">Gerador de certificado</a></li>
                                    <li><a href= "../front/assinatura.php"class="dropdown-item">Assinar Arquivos</a></li>
                                </ul>
                            </div>
                    </li>
                    <li class="nav-item" id="lista-vantagens">
                        <a href="../front/lista-certificado.php" class="nav-link" id="link-vantagens">
                            <img src="../assets/certificado_preto.png" alt="" srcset="" class="d-inline-block img_prop">
                            <p>Certificados</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <div class="dropdown-center">
                            <a  class="nav-link usuario" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="d-inline-block mt-3">
                                    <img src="../assets/Icon awesome-user-circle.png" alt="" srcset="" class="img_prop" id="usuario">
                                </div>
                                
                                <p class="d-inline-block">Usuário</p>
                            </a>
                                <ul class="dropdown-menu mt-2 menu-perf" onfocusout="FocusOut()">
                                    <div class="d-flex flex-row" >
                                        <div class="mt-1 ms-2" id="user">
                                            <img src="../assets/Icon awesome-user-circle.png" alt="" srcset="" class="usu img_prop">
                                        </div>
                                        <div class="ms-2 me-3">          
                                            <p class="mb-0" id="text-usu">
                                                <?php echo substr(ucfirst("$row[1]"), 0, 8)?>
                                            </p>
                                            <p class="perfil-text m-0" >
                                                <?php echo ucfirst("$row[2]")?>
                                            </p>
                                            <a href="../front/usuario.php"class="gerenc-perfil" href="../front/login.html">
                                                <p class="perfil-text m-0 "> 
                                                Gerencial perfil
                                                </p>
                                            </a>
                                        </div> 
                                    </div>
                                    <hr>
                                    <li><a class="dropdown-item" href="../front/login.html">
                                        <img src="../assets/conta.png" alt="" srcset="" class="d-inline-block img_prop icons">
                                        Alterar conta </a>
                                    </li>
                                    <li><a class="dropdown-item" href="../front/usuario.php">
                                        <img src="../assets/config.png" alt="" srcset="" class="d-inline-block img_prop icons">
                                        Configurações </a>
                                        
                                    </li>
                                    <li><a class="dropdown-item" href="">
                                        <img src="../assets/ajuda.png" alt="" srcset="" class="d-inline-block img_prop icons">
                                        Ajuda </a>
                                    </li>
                                    <li><a class="dropdown-item" href="../front/logout.php">
                                        <img src="../assets/sair.png" alt="" srcset="" class="d-inline-block img_prop icons">
                                        Sair</a>
                                    </li>
                                </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<!--//HEADER-->

