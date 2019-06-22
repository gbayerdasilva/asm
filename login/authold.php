<html>
<head>
<title>
Aguarde
</title>
</head>
<body>
<?php
$canac = $_POST["canac"];
$senha = $_POST["senha"];
$senha = hash('sha256', $senha);
//Acesso ao BD
include "conecta_mysql.inc";
$sql = "SELECT * FROM usr where canac='$canac'";
$resultado = mysqli_query($con, $sql);
//echo "$resultado";
echo"aa";
$linhas = mysqli_num_rows ($resultado);
echo "$linhas";
if($linhas==0){		//Testa se retornou algum usuario
	echo "<html><body>";
	echo "<p align \"center\">Usuário não encontrado!</p>";
	echo "<p align \"center\"><a href=\"index.php\">Voltar</a></p>";
	echo "</body></html>";
}
else {
	echo"j";	
//	$sql = "SELECT * FROM usr where canac=$canac";
//	$resultado = mysqli_query($con, $sql);
	echo"k";
	if($senha != mysqli_result($resultado, 0, "senha")){ 		//confere a senha
		echo "<html><body>";
		echo "<p align \"center\">Senha Incorreta</p>";
		echo "<p align \"center\"><a href=\"index.php\">Voltar</a></p>";
		echo "</body></html>";
	}
//	else{			//Senha correta, cria cookies
//	setcookie("canac", $canac);
//	setcookie("senha", $senha);
//	header (Location: ../pages/index.html);
//	echo"a";
	}	
echo"b";
}
?>
</body>
</html>
