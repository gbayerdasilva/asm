<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aeroclube de Santa Maria</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<?php
					include "conecta_mysql.inc"; //conecta com o banco de dados
					$canac = $_POST["canac"];
					$nome = $_POST["nome"];
					$nomepista = $_POST['nomepista'];
					$senha = hash('sha256', $_POST["senha"]);
					$email = $_POST["email"];
					//checa se canac já está no banco
					$sql = "SELECT * FROM usr WHERE canac='$canac'";
					$resultado = mysqli_query($con, $sql);
					$linhas = mysqli_num_rows($resultado);
//						die($resultado);
					if($linhas==0){ //entra se CANAC não está no banco ainda
						//inicia inserção no banco
						$sql = "INSERT INTO usr (canac, nome, nomepista, email, senha) VALUES ('$canac', '$nome', '$nomepista', '$email', '$senha')";
						$resultado = mysqli_query($con, $sql);	
						echo "Seu registro foi enviado para avaliação, você receberá retorno em breve via e-mail!";
						echo 'mysqli_error($con)';					}
					else{
						echo "Seu código ANAC já foi cadastrado no sistema. Caso não tenha sido você, entre em contato com o administrador do sistema para mais informações";
					}
									
				?>
			</div>
		</div>
	</div>

	

</body>
</html>
