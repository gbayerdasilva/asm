<?php
session_start();
if(IsSet($_SESSION["canac"]))
	$canac = $_SESSION["canac"];
if(IsSet($_SESSION["senha"]))
	$senha = $_SESSION["senha"];

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
if($_SESSION["auth"] == 'n'){
	echo "Seu cadastro ainda não foi validado, o que pode levar até dois dias úteis. Por favor aguarde ou entre em contato com a secretaria do Aeroclube. <br>";
	echo "Você será redirecionado automaticamente para a página inicial";
	$_SESSION = array();
	session_destroy();
	header( "refresh:10; url=../index.php" );
	exit;
}
mysqli_close($con);
?>
