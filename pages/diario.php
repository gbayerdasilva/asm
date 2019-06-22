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

  <!-- DataTables Novo -->
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#diario').DataTable();
		} );
	</script>

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
?>

  <section id="home" name="home">
    <div id="headerwrap">
      <div class="container">
        <div class="row centered">
          <div class="col-lg-12">
            <h1>Diario de Bordo</h1>
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
		<table id="diario" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Matricula</th>
					<th>Data</th>
					<th>Origem</th>
					<th>Destino</th>
					<th>Acionamento</th>
					<th>Decolagem</th>
					<th>Pouso</th>
					<th>Corte</th>
					<th>Tempo total</th>
					<th>Pousos</th>
					<th>Piloto em Comando</th>
					<th>Co-piloto / Aluno</th>
				</tr>
			</thead>

<?php
		$sql = "SELECT * FROM diario";
		$resultado = mysqli_query($con, $sql);
		
//		inicia tabela		
		while($row = mysqli_fetch_assoc($resultado)){

			echo "	<tr><th>{$row[matricula]}</th>
				<th>{$row[data]}</th>
				<th>{$row[origem]}</th>
				<th>{$row[destino]}</th>
				<th>{$row[hac]}</th>
				<th>{$row[hdec]}</th>
				<th>{$row[hpou]}</th>
				<th>{$row[hcorte]}</th>
				<th>{$row[ttotal]}</th>
				<th>{$row[pousos]}</th>
				<th>{$row[pic]}</th>
				<th>{$row[sic]}</th>
				</tr>";

		}
?>
	</table>





<br>
<br>
<br>

  </section>
<?php
include "includes/rodape.inc";
?>

  <!-- JavaScript Libraries -->
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
