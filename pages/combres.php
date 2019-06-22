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
			include"includes/combtotal.inc";

?>
</h3>
		<form action="combustivel.php?">
			<input type="button" name="acft" value="Abastecimento ACFT" onClick="window.location.href = 'combacft.php';">
			<input type="button" name="res" value="Abastecimento Reservatório" onClick="window.location.href = 'combres.php';">
		</form>
<br>
<br>
<br>
<br>
<br>
      </div>
      <!--/ .container -->
    </div>
    <!--/ #introwrap -->

    <!-- FEATURES WRAP -->
</section>

  <section id="showcase" name="showcase">
    <div id="showcase">
      <div class="container">
        <div class="row">
          <h1 class="centered">Abastecimeto do Reservatório</h1>
          <br>
          <div class="col-lg-8 col-lg-offset-2" >
		<div text-align: center>
<center>
		<form action="combustivel.php?trata" method="POST">
			<input type="number" id="quant" name="quantidade" size="10" placeholder="Quantidade (l)">
			<input type="hidden" id="op" name="op" value="r">
			<input type="submit" name="submit" value="Enviar">
			<input type="reset" name="reset" value="Reset">
		</form>
</center>	
	</div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
      </div>
      <!-- /container -->
    </div>
  </section>


  <section id="contact" name="contact">
    <div id="footerwrap">
      <div class="container">
        <div class="col-lg-5">
          <h3>Address</h3>
          <p>
            Av. Greenville 987,<br/> New York,<br/> 90873
            <br/> United States
          </p>
        </div>

        <div class="col-lg-7">
          <h3>Drop Us A Line</h3>

          <br>
          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
              <label for="contact-name">Your Name</label>
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-email">Your Email</label>
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-subject">Subject</label>
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <label for="contact-message">Your Message</label>
              <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Send Message</button>
            </div>

          </form>

        </div>
      </div>
    </div>
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
