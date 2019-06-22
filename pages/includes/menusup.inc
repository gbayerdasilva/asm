  <!-- Fixed navbar -->
<?php
$pagina = $_SERVER['PHP_SELF'];
?>
  <div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand smothscroll" href="index.php"><b>ASM</b></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li <?php if(strpos($pagina,"index")!==false) echo "class='active'";?>><a href="index.php">Escala</a></li>
          <li <?php if(strpos($pagina,"horas")!==false) echo "class='active'";?>><a href="horas.php">Controle de Horas</a></li>
          <li <?php if(strpos($pagina,"diario")!==false) echo "class='active'";?>><a href="diario.php">Diário de Bordo</a></li>
          <li <?php if(strpos($pagina,"comb")!==false) echo "class='active'";?>><a href="combustivel.php">Controle de Combustível</a></li>
          <li <?php if(strpos($pagina,"usuario")!==false) echo "class='active'";?>><a href="usuario.php">Usuário</a></li>
          <li><a href="logoff.php">Logoff</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

