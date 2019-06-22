<html>
<head>
<title>
Aguarde
</title>
</head>
<body>
<?php
include "conecta_mysql.inc";
//conecta ao mysql
$canac = $_POST["canac"];
$senha = hash('sha256', $_POST["senha"]);
$sql = "SELECT canac FROM usr WHERE canac='$canac' and senha='$senha'";
$resultado = mysqli_query($con, $sql);
$linhas = mysqli_num_rows($resultado);
if($linhas == 0){
	echo "<p align \"center\">Erro!</p>";
	echo "<p align \"center\"><a href=\"index.php\">Voltar</a></p>";
}
else{
	$sql = "SELECT aut FROM usr WHERE canac='$canac'";
	$resultado = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($resultado);
	session_start();
	$_SESSION['canac'] = $canac;
	$_SESSION['senha'] = $senha;
	$_SESSION['auth'] = $row[aut];
	header("refresh:0;url=../pages/index.php");
//	setcookie("canac", $canac);
//	setcookie("senha", $senha);
}
?>
</body>
</html>
