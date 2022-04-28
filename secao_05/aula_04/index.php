<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 03</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container w-50">
		<div class="mt-5">
			<label for="CEP" class="form-label">CEP</label>
			<input type="text" class="form-control mb-3" name="txtCEP" id="txtCEP">
			<!-- <button class="btn btn-success mb-2" id="btnCadastrar" type="submit">Buscar CEP</button><br> -->


			<label for="Logradouro" class="form-label">Logradouro</label>
			<input type="logradouro" class="form-control mb-3" name="txtLogradouro" id="txtLogradouro">

			<label for="Complemento" class="form-label">Complemento</label>
			<input type="text" class="form-control mb-3" name="txtComplemento" id="txtComplemento">

			<label for="Bairro" class="form-label">Bairro</label>
			<input type="text" class="form-control mb-3" name="txtBairro" id="txtBairro">

			<label for="Localidade" class="form-label">Localidade</label>
			<input type="text" class="form-control mb-3" name="txtLocalidade" id="txtLocalidade">

			<label for="Uf" class="form-label">Uf</label>
			<input type="text" class="form-control mb-3" name="txtUf" id="txtUf">

			<label for="Ibge" class="form-label">Ibge</label>
			<input type="text" class="form-control mb-3" name="txtIbge" id="txtIbge">

			<label for="Gia" class="form-label">Gia</label>
			<input type="text" class="form-control mb-3" name="txtGia" id="txtGia">

			<label for="DDD" class="form-label">DDD</label>
			<input type="text" class="form-control mb-3" name="txtDDD" id="txtDDD">

			<label for="Siafi" class="form-label">Siafi</label>
			<input type="text" class="form-control mb-3" name="txtSiafi" id="txtSiafi">

			<button class="btn btn-success mt-2" id="btnCadastrar" type="submit">Enviar</button>
			<span id="spResult"></span>
		</div>
		<div class="card mt-5">
			<div class="card-header">Consulta
				<button class="btn btn-warning" id="btnConsultar" type="submit">Consultar</button>
			</div>
			<div class="card-body">
				<p id="pResult"></p>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>
</html>