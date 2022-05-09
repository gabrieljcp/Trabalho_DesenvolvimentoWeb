<h1>Cadastrar Morador</h1>
<form action="?page=salvar-morador" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do Morador</label>
		<input type="text" name="nome" class="form-control">
	</div>
	<div class="mb-3">
		<label>Idade</label>
		<input type="int" name="idade" class="form-control">
	</div>
	<div class="mb-3">
		<label>Apartamento</label>
		<input type="int" name="apartamento" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="data_nascimento" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>