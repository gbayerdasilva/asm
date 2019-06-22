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
?>
<script>
function validateForm() {
  var x = document.forms["senha"]["senhaold"].value;
  var y = document.forms["senha"]["senhanew"].value;
  var z = document.forms["senha"]["senhaconf"].value;
  if (x == "" || y == "" || z == "") {
    alert("Campos não podem estar em branco");
    return false;
  }
}
function validateMail() {
  var x = document.forms["mail"]["mailold"].value;
  var y = document.forms["mail"]["mailnew"].value;
  var z = document.forms["mail"]["mailconf"].value;
  if (x == "" || y == "" || z == "") {
    alert("Campos não podem estar em branco");
    return false;
  }
}
</script>
  <section id="home" name="home">
    <div id="headerwrap">
      <div class="container">
        <div class="row centered">
          <div class="col-lg-12">
            <h1>Alterar dados de usuário</h1>
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
			<input type="button" name="mudasenha" value="Altere sua senha" onClick="window.location.href = 'usuario.php?senha';">
			<br>
			<input type="button" name="mudaemail" value="Altere seu e-mail" onClick="window.location.href = 'usuario.php?mail';">
			<br>
			<input type="button" name="apagaconta" value="Exclua sua conta" onClick="window.location.href = 'exclui.php';">
<br>
<br>
<br>
  <section id="showcase" name="showcase">
    <div id="showcase">
      <div class="container">
        <div class="row">

          <br>
<!--          <div class="col-lg-8 col-lg-offset-2"> -->
		<h3 style="color:white; align:center; text-align:center; margin:0 auto;">
<center>
<?php
		if(isSet($_GET["senha"])){
			echo "<h1 class='centered'>Altere sua senha:</h1><br>";
			echo "<h4 style='color:white; align:center; text-align:center; margin:0 auto;'>
				<form name='senha' action='muda.php' onsubmit='return validateForm()' method='POST'>
					Senha antiga: <input type='password' id='senhaold' name='senhaold' size='20' placeholder='Senha antiga' style='color:black'>
						<br>
					Nova senha: <input type='password' id='senhanew' name='senhanew' size='20' placeholder='Nova senha' style='color:black'>
						<br>
					Repita nova senha: <input type='password' id='senhaconf' name='senhaconf' size='20' placeholder='Repita senha' style='color:black'>
						<br>
						<br>
					<input type='submit' name='submit' value='Enviar' style='color:black'>
					<input type='reset' name='reset' value='Reset' style='color:black'>
				</form>
				</h4>";
		}
		if(isSet($_GET["mail"])){
			echo "<h1 class='centered'>Altere seu e-mail:</h1><br>";
			echo "<h4 style='color:white; align:center; text-align:center; margin:0 auto;'>
				<form name='mail' action='muda.php' onsubmit='return validateMail()' method='POST'>
					E-mail antigo: <input type='email' id='mailold' name='mailold' size='25' placeholder='E-mail antigo' style='color:black'>
						<br>
					Novo e-mail: <input type='email' id='mailnew' name='mailnew' size='25' placeholder='Novo e-mail' style='color:black'>
						<br>
					Repita e-mail: <input type='email' id='mailconf' name='mailconf' size='25' placeholder='Novo e-mail' style='color:black'>
						<br>
						<br>
					<input type='submit' name='submit' value='Enviar' style='color:black'>
					<input type='reset' name='reset' value='Reset' style='color:black'>
				</form>
				</h4>";
		}
?>
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
