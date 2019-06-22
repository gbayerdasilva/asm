<html>
<head>
</head>
<body>
<?php
include "includes/valida_session.inc";
include "includes/conecta_mysql.inc";
$canac = $_SESSION["canac"];
$acft = $_POST["acft"];
$data = $_POST["data"];
$origem = strtoupper($_POST["origem"]);
$destino = strtoupper($_POST["destino"]);
$duracao = $_POST["duracao"];
$hac = $_POST["hac"];
$hdec = $_POST["hdec"];
$hpouso = $_POST["hpouso"];
$hcorte = $_POST["hcorte"];
$pousos = $_POST["pousos"];
$caluno = $_POST["caluno"];

//SELECT dos dados da aeronave e alteração de horas totais e disponíveis
$sql = "SELECT * FROM aeronave WHERE aeronave.matricula = '$acft'";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($resultado);
$htotais = $row['horas_totais'] + $duracao;
$ptotais = $row['pousos_totais'] + $pousos;
$hdisp = $row['hdisp'] - $duracao;
$sql = "UPDATE aeronave SET aeronave.horas_totais = '$htotais' WHERE aeronave.matricula = '$acft'";
$resultado = mysqli_query($con, $sql);

$sql = "UPDATE aeronave SET aeronave.pousos_totais = '$ptotais'WHERE aeronave.matricula = '$acft'";
$resultado = mysqli_query($con, $sql);

$sql = "UPDATE aeronave SET aeronave.hdisp = '$hdisp' WHERE aeronave.matricula = '$acft'";
$resultado = mysqli_query($con, $sql);

//Adiciona entradas no diario
if($_POST['caluno'] ==""){
$sql = "INSERT INTO diario (matricula, data, origem, destino, hac, hdec, hpou, hcorte, ttotal, pousos, pic) VALUES ('$acft', '$data', '$origem', '$destino', '$hac', '$hdec', '$hpouso', '$hcorte', '$duracao', '$pousos', '$canac')";
}
else{
$sql = "INSERT INTO diario (matricula, data, origem, destino, hac, hdec, hpou, hcorte, ttotal, pousos, pic, sic) VALUES ('$acft', '$data', '$origem', '$destino', '$hac', '$hdec', '$hpouso', '$hcorte', '$duracao', '$pousos', '$canac', '$caluno')";
}
$resultado = mysqli_query($con, $sql);


//Atualiza dados do pic
$sql = "SELECT * FROM usr WHERE canac = '$canac'";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($resultado);
$hpic = $row['horas'] + $duracao;
$ppic = $row['pousos'] + $pousos;
$sql = "UPDATE usr SET horas = $hpic WHERE canac = '$canac'";
$resultado = mysqli_query($con, $sql);
$sql = "UPDATE usr SET pousos = $ppic WHERE canac = '$canac'";
$resultado = mysqli_query($con, $sql);
echo mysqli_error($con);

//Atualiza dados do sic, se existente
if($_POST['caluno'] !=""){
$sql = "SELECT * FROM usr WHERE canac = '$caluno'";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($resultado);
$hsic = $row['horas'] + $duracao;
$psic = $row['pousos'] + $pousos;
$sql = "UPDATE usr SET horas = $hsic WHERE canac = '$caluno'";
$resultado = mysqli_query($con, $sql);
$sql = "UPDATE usr SET pousos = $psic WHERE canac = '$caluno'";
$resultado = mysqli_query($con, $sql);
}

header( "refresh:0; url=horas.php" );
?>
</body>
</html>
