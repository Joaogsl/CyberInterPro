
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CyberInterPro API Test</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--link rel="stylesheet" href="css/style.css" /-->
		<meta charset="utf-8">
		<link rel="stylesheet" href="../front/css/main1.css">
    	<link rel="stylesheet" href="css/request.css">
    	<link rel="stylesheet" href="../front/css/menu.css">
		<link rel="stylesheet" href="../front/css/footer.css">

		<script src="../front/js/certificado.js"></script>
	</head>
	<body onload="Step3()">
		<?php
			if(isset($_GET['nome']))
			{
				$name=$_GET['nome'];
				$fpname = fopen('name.txt', 'w');
				#$fpname = fopen($name.date('m-d-Y-s_hi').'.txt', 'a');
				fwrite($fpname, $name);
				fclose($fpname);
				
				$cpf=$_GET['cpf'];
				$fpcpf = fopen('cpf.txt', 'w');
				fwrite($fpcpf, $cpf);
				fclose($fpcpf);
				
				$senha=$_GET['senha'];
				$fpsenha = fopen('senha.txt', 'w');
				fwrite($fpsenha, $senha);
				fclose($fpsenha);
			}
			
			//FUNCIONALIDADE *AWS*
			// Shell_Exec('powershell -InputFormat none -ExecutionPolicy ByPass -NoProfile -Command "& { . \"C:\wamp64\www\cyberinterpro\aws\test.ps1\"; }"');
			
			$filename = $name . '_' . $cpf . '.pfx';
			header("Location: ../front/baixar-certificado-aws.php?filename=$filename");
			// echo "<a href='http://localhost/cyberinterpro/aws/files/$filename'>Certificado</a>";
			// echo "&nbsp;&nbsp;&nbsp;";
			// echo "<a href='http://localhost/cyberinterpro/aws/crl/cyberinterproonline.crl'>LCR</a>";
			// echo "&nbsp;&nbsp;&nbsp;";
			// echo "<a href='http://localhost/cyberinterpro/aws/chain/CyberInterProChain.p7b'>Cadeia</a>";

			include ("../front/request_api.php");
			
		?>
	</body>
</html>