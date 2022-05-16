<h1>Editar Candidato</h1>
<?php
    $sql = "SELECT * FROM candidato WHERE idCandidato=
    ".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-candidato" method="POST">
	<input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
	<div class="mb-3">
		<label>Nome do Candidato: </label>
		<input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento: </label>
		<input type="date" name="dataNascimento" value="<?php print $row->dataNascimento; ?>" class="form-control" placeholder="DD/MM/AAAA">
	</div>
	<div class="mb-3">
		<label>Telefone: </label>
		<input type="int" name="telefone" value="<?php print $row->telefone; ?>" class="form-control" placeholder="XX XXXXX-XXXX">
	</div>
	<div class="mb-3">
		<label>Cidade: </label>
		<input type="text" name="cidade" value="<?php print $row->cidade; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Estado: </label>
		<select  name="estado" value="<?php print $row->estado; ?>" aria-label="Default select example">
		    <option>Selecione</option>
			<option>Acre</option>
			<option>Alagoas</option>
			<option>Amapá</option>
			<option>Amazonas</option>
			<option>Bahia</option>
			<option>Ceará</option>
			<option>Distrito Federal</option>
			<option>Espírito Santo</option>
			<option>Goiás</option>
			<option>Maranhão</option>
			<option>Mato Grosso</option>
			<option>Mato Grosso do Sul</option>
			<option>Minas Gerais</option>
			<option>Pará</option>
			<option>Paraíba</option>
			<option>Paraná</option>
			<option>Pernambuco</option>
			<option>Piauí</option>
			<option>Rio de Janeiro</option>
			<option>Rio Grande do Norte</option>
			<option>Rio Grande do Sul</option>
			<option>Rondônia</option>
			<option>Roraima</option>
			<option>Santa Catarina</option>
			<option>São Paulo</option>
			<option>Sergipe</option>
			<option>Tocantins</option>
			<option>Estrangeiro</option>
		</select>
	</div>
	<div class="mb-3">
		<label>Endereço: </label>
		<input type="text" name="endereco" value="<?php print $row->endereco; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF: </label>
		<input type="int" name="cpf" value="<?php print $row->cpf; ?>" class="form-control"  placeholder="Apenas números" maxlength="11" pattern="[0-9]+$">
	</div>
	<div class="mb-3">
		<label>Escolaridade: </label>
		<select name="escolaridade" value="<?php print $row->escolaridade; ?>" aria-label="Default select example">
			<option>Selecione</option>			
			<option >Nível fundamental incompleto</option>
			<option >Nível fundamental completo</option>
			<option >Nível fundamental cursando</option>
			<option >Nível médio incompleto</option>
			<option >Nível médio completo</option>
			<option >Nível médio cursando</option>
			<option >Nível superior incompleto</option>
			<option >Nível superior completo</option>
			<option >Nível superior cursando</option>
		</select>
	</div>
	<div class="mb-3">
		<label>Cargo</label>
		<select name="vagas_idvagas" value="<?php print $row->cargo; ?>" aria-label="Default select example">
			<option>Escolha um cargo</option>
		<?php
			$sql = "SELECT * FROM vagas";
			$res = $conn->query($sql);
			if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					print "<option value='".$row->idvagas."'>";
					print $row->cargo."</option>";
				}
			}else{
				print "<option>Não tem vaga cadastrada</option>";
			}
		?>
		</select>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>