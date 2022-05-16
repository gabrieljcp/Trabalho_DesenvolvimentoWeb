<h1>Listar Vagas</h1>
<?php
	$sql = "SELECT * FROM vagas";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

	if($qtd > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Cargo</th>";
        print "<th>Salário</th>";
        print "<th>Data de Início</th>";
        print "<th>Escolaridade Exigida</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idvagas."</td>";
			print "<td>".$row->cargo."</td>";
            print "<td>".$row->salario."</td>";
            print "<td>".$row->dataInicio."</td>";
            print "<td>".$row->escolaridadeExigida."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'><p>Não encontrou resultado</p></div>";
	}
?>