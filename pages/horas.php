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
include "includes/conecta_mysql.inc";
include "includes/menusup.inc";
$canac = $_SESSION['canac'];
$sql1 = "SELECT * FROM aeronave";
$result1 = mysqli_query($con, $sql1);
$opt = "<select name='acft' size='1' style='color:black'>";
while ($row1 = mysqli_fetch_assoc($result1)) {
	$opt .="<option value='{$row1['matricula']}'>{$row1['matricula']}</option>";
}
$opt .="</select>";
?>

  <section id="home" name="home">
    <div id="headerwrap">
      <div class="container">
        <div class="row centered">
          <div class="col-lg-12">
            <h1>Controle de Horas</h1>
            <h3>Gerenciamento das horas de voo do piloto</h3>
            <br>
            <br>
          </div>

<!--          <div class="col-lg-8"> -->
		<div style="margin:0;padding:0">
<?php
			if($_SESSION['auth'] != 'e') {
				echo "<h4 style='color:white'>Novo registro</h4>";
				echo "<h5 style='color:white; align:center; text-align:center; margin:0 auto;'> <form action='prochoras.php' method='POST'>
					Aeronave: $opt
					Data: <input type='date' id='data' name='data' size='7' placeholder='Data do Voo' style='color:black'>
				ICAO Origem: <input type='text' id='origem' name='origem' maxlength='4' size='7' placeholder='Origem'style='color:black'>
				ICAO Destino: <input type='text' id='destino' name='destino' maxlength='4' size='7' placeholder='Destino'style='color:black'>
					Duração(Decimal): <input type='number' id='duracao' name='duracao' step='0.1' size='14' placeholder='Duração'style='color:black'>
Acionamento (z): <input type='time' id='hac' name='hac' size='14' placeholder='Acionamento'style='color:black'>
<br>
<br>
Hora decolagem (z): <input type='time' id='hdec' name='hdec' size='14' placeholder='Decolagem'style='color:black'>
Hora pouso (z): <input type='time' id='hpouso' name='hpouso' size='14' placeholder='Pouso'style='color:black'>
Hora corte (z): <input type='time' id='hcorte' name='hcorte' size='14' placeholder='Corte'style='color:black'>
					Nº de pousos: <input type='number' id='pousos' name='pousos' maxlength='2' size='7' placeholder='Pousos'style='color:black'>
					CANAC Aluno: <input type='text' id='aluno' name='caluno' maxlength='6' size='9' placeholder='Aluno'style='color:black'>
					</h5>:
					<br>
					<input type='submit' name='submit' value='Enviar'>
					<input type='reset' name='reset' value='Reset'>
					</form>";
}
?>
            <br>
            <br>
            <br>
          </div>
          <div class="col-lg-2">
          </div>
        </div>
      </div>
      <!--/ .container -->
    </div>
    <!--/ #headerwrap -->
  </section>


  <section id="desc" name="desc">
    <!-- INTRO WRAP -->
    <div id="intro">
      <div class="container">
        <div class="row centered">
		<h2> Dados do usuário: </h2>
            <br>
<?php
	$sql = "SELECT * FROM usr WHERE canac='$canac'";
	$resultado = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($resultado);
	echo "<h4> Horas totais: $row[horas] h</h4>";
	echo "<h4> Pousos totais: $row[pousos] </h4>";
?>
	<br>
	<br>

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
