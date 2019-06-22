<?php
		include "conecta_mysql.inc";		
		$sql = "SELECT quant_total FROM combustivel WHERE horario = (SELECT MAX(horario) FROM combustivel)";
		$resultado = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($resultado);
		echo "Combustível disponível: $row[quant_total] l \n";
?>
