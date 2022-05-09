<?php
	switch($_REQUEST['acao']){
		case "cadastrar":
			$nome = $_POST["nome"];
			$idade = $_POST["idade"];
			$apartamento = $_POST["apartamento"];
			$data_nascimento = $_POST["data_nascimento"];

			$sql = "INSERT INTO morador (nome,idade,apartamento,data_nascimento) 
			        VALUES ('{$nome}','{$idade}','{$apartamento}','{$data_nascimento}')";
				
		    $res = $conn->query($sql);

			//$sqlidade = "INSERT INTO morador (idade) VALUES ('{$idade}')";
		    //$res = $conn->query($sqlnome);

			//$sqlapartamento = "INSERT INTO morador (apartamento) VALUES ('{$apartamento}')";
		    //$res = $conn->query($sqlapartamento);

			//$sqldata = "INSERT INTO morador (data_nascimento) VALUES ('{$data_nascimento}')";
		    //$res = $conn->query($sqldata);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar-morador';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-morador';</script>";
			}
		break;

		case "editar":

		break;

		case "excluir":

		break;
	}


