<html>
<head>
<?php
include "includes/conecta_mysql.inc";
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#tabela').DataTable({			
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url": "buscadiario.php",
					"type": "POST"
				}
			});
		} );
		</script>
</head>
<body>
<table id="tabela" class="display" style="width:100%">
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
		</table>
</body>
</html>
