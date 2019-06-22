<html>
<head>
</head>
<body>
<?php
include "includes/valida_session.inc";
include "includes/conecta_mysql.inc";
$canac = $_SESSION["canac"];


if(isSet($_POST["senhaold"])){
$senhaold = hash('sha256', $_POST["senhaold"]);
$senhanew = hash('sha256', $_POST["senhanew"]);
$senhaconf = hash('sha256', $_POST["senhaconf"]);
if($senhanew !== $senhaconf){
echo "<script>
alert('As senhas inseridas não correspondem');
window.location.href='usuario.php?senha';
</script>";
}
$sql = "SELECT * FROM usr WHERE usr.canac = $canac";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($resultado);
if($row['senha'] !== $senhaold){
echo "<script>
alert('A senha antiga está incorreta');
window.location.href='usuario.php?senha';
</script>";
}
$sql = "UPDATE usr SET usr.senha= '$senhanew' WHERE usr.canac = '$canac'";
$resultado = mysqli_query($con, $sql);
echo "<script>
alert('Sua senha foi atualizada com sucesso! Por favor faça login novamente');
window.location.href='../login/index.php';
</script>";
}


if(isSet($_POST["mailold"])){
$mailold = $_POST["mailold"];
$mailnew = $_POST["mailnew"];
$mailconf = $_POST["mailconf"];
if($mailnew !== $mailconf){
echo "<script>
alert('Os e-mail inseridos não correspondem');
window.location.href='usuario.php?mail';
</script>";
}
$sql = "SELECT * FROM usr WHERE usr.canac = $canac";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($resultado);
if($row['email'] !== $mailold){
echo "<script>
alert('O e-mail antigo está incorreto');
window.location.href='usuario.php?mail';
</script>";
}
$sql = "UPDATE usr SET usr.email= '$mailnew' WHERE usr.canac = '$canac'";
$resultado = mysqli_query($con, $sql);
echo "<script>
alert('Seu e-mail foi atualizado com sucesso!');
window.location.href='usuario.php';
</script>";
}
?>
</body>
</html>
