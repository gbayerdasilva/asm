<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Aeroclube de Santa Maria</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="aeroclube, asm, santa, maria, aviacao, cessna" name="keywords">
  <meta content="Portal do Aeroclube de Santa Maria" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Pratt
    Template URL: https://templatemag.com/pratt-app-landing-page-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">
<?php
include "includes/valida_session.inc";
include "includes/menusup.inc";
include "includes/conecta_mysql.inc";
if(isset($_GET["trata"])){
$matricula = $_POST["matricula"];
$quant = $_POST["quantidade"];
$op = $_POST["tipo"];
$resp = $_SESSION["canac"];
$sql = "SELECT quant_total FROM combustivel WHERE horario = (SELECT MAX(horario) FROM combustivel)";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($resultado);
$comb_total = $row[quant_total];
if($op == 'r'){
	$comb_total = $comb_total + $quant;
	$matricula = "NULL";
}
else{
	$comb_total = $comb_total - $quant;
}
$sql = "INSERT INTO combustivel(responsavel, op, quant_op, quant_total) values ('$resp', '$op', '$quant', '$comb_total')";
$resultado = mysqli_query($con, $sql);
}
?>

  <section id="home" name="home">
    <div id="headerwrap">
      <div class="container">
        <div class="row centered">
          <div class="col-lg-12">
            <h1>Controle de Combustível</h1>
            <br>
          </div>

          <div class="col-lg-2">
            <!-- barra lateral esquerda -->
          </div>
          <div class="col-lg-8">
	<!-- central -->
          </div>
  </section>


  <section id="desc" name="desc">
    <!-- INTRO WRAP -->
    <div id="intro">
      <div class="container">
        <div class="row centered">
		<h3>
<?php
		include "includes/combtotal.inc";
?>
</h3>
<?php
if($_SESSION['auth'] != 'e') {
	echo "		<input type='button' name='acft' value='Abastecimento ACFT' onClick='window.location.href = 'combacft.php';'> ";
	echo "		<input type='button' name='res' value='Abastecimento Reservatório' onClick='window.location.href = 'combres.php';'> ";
}
?>
<br>
<br>
<br>
  <section id="showcase" name="showcase">
    <div id="showcase">
      <div class="container">
        <div class="row">
          <h1 class="centered">Últimos abastecimentos:</h1>
          <br>
<!--          <div class="col-lg-8 col-lg-offset-2"> -->
		<h3 style="color:white; align:center; text-align:center; margin:0 auto;">
<center>
<?php
		$sql = "SELECT * FROM combustivel ORDER BY horario desc limit 5";
		$resultado = mysqli_query($con, $sql);
		
//		inicia tabela		
		echo "<table border='2' text-align:center>";
		echo "<tr><td style='padding: 3px'>Dia / Hora</td><td style='padding: 3px'>Responsável</td><td style='padding: 3px'>Tipo de operação</td><td style='padding: 3px'>Aeronave</td><td style='padding: 3px'>Quantidade (l)</td></tr>";
		while($row = mysqli_fetch_assoc($resultado)){
			$sql2 = "SELECT nomepista FROM usr WHERE canac='$row[responsavel]'";
			$res2 = mysqli_query($con, $sql2);
			$row2  = mysqli_fetch_assoc($res2);
			if($row[op] == 'a') $op="Abastecimento de ACFT";
			else $op = "Reabastecimento do reservatório";
			echo "<tr><td style='padding: 3px'>{$row[horario]}</td><td style='padding: 3px'>{$row2[nomepista]}</td><td style='padding: 3px'>{$op}</td><td style='padding: 3px'>{$row[aeronave]}</td><td style='padding: 3px'>{$row[quant_op]}</td></tr>";

		}
		echo "</table>";
?>
</h3>
</center>
  </section>


<?php
include "includes/rodape.inc";
?>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
