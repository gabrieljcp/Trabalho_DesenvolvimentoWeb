<h1>Cadastrar Vagas</h1>
<form action="?page=salvar-vagas" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Cargo: </label>
		<input type="text" name="cargo" class="form-control">
	</div>
	<div class="mb-3">
		<label>Salário: </label>
		<input type="text" name="salario" class="form-control" placeholder="R$ 0.000,00">
	</div>
	<div class="mb-3">
		<label>Data de Início: </label>
		<input type="date" name="dataInicio" class="form-control">
	</div>
	<div class="mb-3">
		<label>Escolaridade: </label>
		<select name="escolaridadeExigida" aria-label="Default select example"  >
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
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>