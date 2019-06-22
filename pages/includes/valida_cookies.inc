<?php
if(IsSet($_COOKIE["canac"]))
	$canac = $_COOKIE["canac"];
if(IsSet($_COOKIE["senha"]))
	$senha = $_COOKIE["senha"];

if(empty($canac) OR empty($senha)){
	echo "Você não realizou Login!";
	header( "refresh:5; url=../login/index.php" );
	exit;
}
else{
	include "conecta_mysql.inc";
	$sql = "SELECT * FROM usr WHERE canac='$canac' AND senha='$senha'";
	$resultado = mysqli_query($con, $sql);
	$linhas = mysqli_num_rows($resultado);
	if($linhas==0){
		echo "Ocorreu um erro, por favor faça login novamente!";
		header( "refresh:5; url=../login/index.php" );
		exit;
	}
}
mysqli_close($con);
?>
