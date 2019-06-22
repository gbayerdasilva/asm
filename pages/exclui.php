<html>
<head>
</head>
<body>
<?php
include "includes/valida_session.inc";
include "includes/conecta_mysql.inc";
$canac = $_SESSION["canac"];
echo "<script>
r = confirm('Isso irá excluir sua conta permanentemente, tem certeza que deseja continuar?');
if (r == false){
window.location.href='usuario.php';
}
</script>";
sleep(1);
$sql = "DELETE FROM usr WHERE usr.canac = '$canac'";
$resultado = mysqli_query($con, $sql);
echo "<script>
alert('A sua conta foi deletada permanentemente');
window.location.href='../login/index.php';
</script>";
?>
</body>
</html>
