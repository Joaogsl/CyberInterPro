<?php
	include('verificar-login.php');
	include('conectbd.php');
	include "menu.php";
?>
<section>
        <div class="mt-5 text-center justify-content-center">
            <h1 class="titulo">Geração de Certificado</h1>
            <?php
                include "ProgressBarRequest.html";

            ?>
        </div>
    </section>
<section>
		<div id="container" class="d-flex text-center justify-content-center align-items-center">
			<div id="centralizar"  >	
				<p class="" id="frase1">Seu Certificado Digital foi gerado com <span>sucesso!</span></p>
				<p class="" id="frase2">Clique abaixo e faça o download do certificado e da cadeia.</p>
				<?php 
				echo "<a href='http://localhost/cyberinterpro/aws/files/$filename ' class='btn btn-primary rounded-pill entrar_text  d-md-inline-block d-flex flex-sm-column btn_land mt-md-3 mb-md-0 mb-2 me-md-5' id='btn_down'>Certificado</a>";
				echo "<a href='http://localhost/cyberinterpro/aws/chain/CyberInterProChain.p7b ' class='btn btn-primary rounded-pill entrar_text  d-md-inline-block d-flex flex-sm-column btn_land mt-md-3 mb-md-0 mb-2 me-md-5' id='btn_down'>Cadeia</a>";
				?>
				</div>
		</div>
</section>
<?php
	include ('footer.html');

?>
