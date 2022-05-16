<?php
	switch($_REQUEST['acao']){
		case "cadastrar":
			$nome = $_POST["nome"];
			$dataNascimento = $_POST["dataNascimento"];
			$telefone = $_POST["telefone"];
			$cidade = $_POST["cidade"];
			$estado = $_POST["estado"];
			$endereco = $_POST["endereco"];
			$cpf = $_POST["cpf"];
			$escolaridade = $_POST["escolaridade"];
			$vagas_idvagas = $_POST["vagas_idvagas"];

			$sql = "INSERT INTO candidato (nome,dataNascimento,telefone,cidade,estado,endereco,cpf,escolaridade,vagas_idvagas) 
			        VALUES ('{$nome}','{$dataNascimento}','{$telefone}','{$cidade}','{$estado}','{$endereco}','{$cpf}','{$escolaridade}','{$vagas_idvagas}')";
				
		    $res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar-candidato';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-candidato';</script>";
			}
		break;

		case 'editar':
			$nome = $_POST["nome"];
			$dataNascimento = $_POST["dataNascimento"];
			$telefone = $_POST["telefone"];
			$cidade = $_POST["cidade"];
			$estado = $_POST["estado"];
			$endereco = $_POST["endereco"];
			$cpf = $_POST["cpf"];
			$escolaridade = $_POST["escolaridade"];
			$vagas_idvagas = $_POST["vagas_idvagas"];

			$sql = "UPDATE candidato SET nome='{$nome}',dataNascimento='{$dataNascimento}',telefone='{$telefone}',cidade='{$cidade}',estado='{$estado}',
			endereco='{$endereco}',cpf='{$cpf}',escolaridade='{$escolaridade}',vagas_idvagas='{$vagas_idvagas}'
			WHERE id=".$_REQUEST["id"]; 
		

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=listar-candidato';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar-candidato';</script>";
			}
		break;

		case "excluir":

		break;
	}


