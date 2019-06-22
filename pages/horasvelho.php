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
include "valida_session.inc";
include "menusup.inc";
?>

  <section id="home" name="home">
    <div id="headerwrap">
      <div class="container">
        <div class="row centered">
          <div class="col-lg-12">
            <h1>Controle de Horas</h1>
            <h3>Lançamento de horas de voo</h3>
            <br>
          </div>

          <div class="col-lg-2">

		
          </div>
          <div class="col-lg-8">
		<div style="margin:0;padding:0">
			<?php
			if($_SESSION['auth'] != 'e') {
				echo "<h5>Novo registro</h5>";
				echo "<form action='prochoras.php' method='POST'>
					<input type='text' id='matricula' name='Matrícula' maxlength='5' size='10' placeholder='Matrícula'>
					<input type='date' id='data' name='Data' size='10' placeholder='Data do Voo'>
					<input type='text' id='duracao' name='Duração' maxlength='3' size='12' placeholder='Duração(Decimal)'>
					<input type='number' id='pousos' name='Pousos' maxlength='2' size='10' placeholder='Pousos'>
					<input type='text' id='aluno' name='CANAC Aluno' maxlength='6' size='9' placeholder='CANAC Aluno'>
					<input type='submit' name='submit' value='Enviar'>
					<input type='reset' name='reset' value='Reset'>
					</form>";
}
?>
		</div>
          </div>

  <section id="desc" name="desc">
    <!-- INTRO WRAP -->
    <div id="intro">
      <div class="container">
        <div class="row centered">
          <h1>Dados do usuário</h1>
          <br>
          <br>
         

        </div>
        <br>
        <hr>
      </div>
      <!--/ .container -->
    </div>
    <!--/ #introwrap -->

    <!-- FEATURES WRAP -->
   <div id="features">
      <div class="container">
        <div class="row">
          <h1 class="centered">What's New?</h1>
          <br>
          <br>
          <div class="col-lg-6 centered">
            <img class="centered" src="img/mobile.png" alt="">
          </div>

          <div class="col-lg-6">
            <h3>Some Features</h3>
            <br>
            <!-- ACCORDION -->
            <div class="accordion ac" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
  		                        First Class Design
  		                        </a>
                </div>
                <!-- /accordion-heading -->
<!--                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                      with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                  <!-- /accordion-inner -->
                </div>
                <!-- /collapse -->
              </div>
              <!-- /accordion-group -->
              <br>

<!--              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Retina Ready Theme</a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                      with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                  <!-- /accordion-inner -->
<!--                </div>
                <!-- /collapse -->
<!--              </div>
              <!-- /accordion-group -->
<!--              <br>

              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Awesome Support</a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                      with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                  <!-- /accordion-inner -->
<!--                </div>
                <!-- /collapse -->
<!--              </div>
              <!-- /accordion-group -->
<!--              <br>

              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">Responsive Design</a>
                </div>
                <div id="collapseFour" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                      with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                  <!-- /accordion-inner -->
<!--                </div>
                <!-- /collapse -->
<!--              </div>
              <!-- /accordion-group -->
<!--              <br>
            </div>
            <!-- Accordion -->
<!--          </div>
        </div>
      </div>
      <!--/ .container -->
<!--    </div>
    <!--/ #features -->
<!--  </section>


  <section id="showcase" name="showcase">
    <div id="showcase">
      <div class="container">
        <div class="row">
          <h1 class="centered">Some Screenshots</h1>
          <br>
          <div class="col-lg-8 col-lg-offset-2">
            <div id="carousel-example-generic" class="carousel slide">
              <!-- Indicators -->
<!--              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              </ol>

              <!-- Wrapper for slides -->
<!--              <div class="carousel-inner">
                <div class="item active">
                  <img src="img/item-01.png" alt="">
                </div>
                <div class="item">
                  <img src="img/item-02.png" alt="">
                </div>
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


<!--  <section id="contact" name="contact">
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
  </section> -->
	<?
		include 'include/rodape.inc';
	?>
  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Gabriel Bayer da Silva</strong>. All Rights Reserved 
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/pratt-app-landing-page-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Pratt template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
