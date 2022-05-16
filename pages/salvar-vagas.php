<?php
	switch($_REQUEST['acao']){
		case "cadastrar":
			$cargo = $_POST["cargo"];
			$salario = $_POST["salario"];
			$dataInicio = $_POST["dataInicio"];
			$escolaridadeExigida = $_POST["escolaridadeExigida"];

			$sql = "INSERT INTO vagas (cargo, salario, dataInicio, escolaridadeExigida) 
			        VALUES ('{$cargo}','{$salario}','{$dataInicio}','{$escolaridadeExigida}')";
				
		    $res = $conn->query($sql);

			//$sqlidade = "INSERT INTO morador (idade) VALUES ('{$idade}')";
		    //$res = $conn->query($sqlnome);

			//$sqlapartamento = "INSERT INTO morador (apartamento) VALUES ('{$apartamento}')";
		    //$res = $conn->query($sqlapartamento);

			//$sqldata = "INSERT INTO morador (data_nascimento) VALUES ('{$data_nascimento}')";
		    //$res = $conn->query($sqldata);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar-vagas';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-vagas';</script>";
			}
		break;

		case "editar":

		break;

		case "excluir":

		break;
	}


