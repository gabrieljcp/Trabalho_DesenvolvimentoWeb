<h1>Listar Candidatos</h1>
<?php
	$sql = "SELECT * FROM candidato AS c
	INNER JOIN vagas AS v
	ON c.vagas_idvagas = v.idvagas" ;
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

	if($qtd > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome do Candidato</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Telefone</th>";
        print "<th>Cidade</th>";
		print "<th>Estado</th>";
		print "<th>Endereço</th>";
		print "<th>CPF</th>";
		print "<th>Escolaridade</th>";
		print "<th>Cargo</th>";
		//print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idCandidato."</td>";
			print "<td>".$row->nome."</td>";
            print "<td>".$row->dataNascimento."</td>";
            print "<td>".$row->telefone."</td>";
            print "<td>".$row->cidade."</td>";
			print "<td>".$row->estado."</td>";
			print "<td>".$row->endereco."</td>";
			print "<td>".$row->cpf."</td>";
			print "<td>".$row->escolaridade."</td>";
			print "<td>".$row->cargo."</td>";
			//print "<td>
				   //	<button onclick=\"location.href='?page=editar-candidato&id=".$row->idCandidato."';\" class='btn btn-success'>Editar</button>	
				    //<button class='btn btn-danger'>Excluir</button>   
			       //</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'><p>Não encontrou resultado</p></div>";
	}
?>