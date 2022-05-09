<h1>Listar Moradores</h1>
<?php
	$sql = "SELECT * FROM morador";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

	if($qtd > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome do Morador</th>";
        print "<th>Idade</th>";
        print "<th>Apartamento</th>";
        print "<th>Data de Nascimento</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idMorador."</td>";
			print "<td>".$row->nome."</td>";
            print "<td>".$row->idade."</td>";
            print "<td>".$row->apartamento."</td>";
            print "<td>".$row->data_nascimento."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'><p>Não encontrou resultado</p></div>";
	}
?>