<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 04</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container w-50">
		<?php
		$cep = filter_input(INPUT_POST, "inputCEP", FILTER_SANITIZE_STRING);
		$cep_off = array("-", ".");
		$cep = str_ireplace($cep_off, "", $cep);
		$str = file_get_contents("https://viacep.com.br/ws/". $cep . "/" . "json/");

		$arrCEP = json_decode($str);

		// if ($arrCEP != null){
			
		// };
		?>
		<form action="" method="POST">
			<div class="mt-5">
				<label for="inputCEP" class="form-label">Buscar CEP</label>
				<input type="text" class="form-control" name="inputCEP" id="inputCEP" placeholder="00.000-000">
				<button class="btn btn-success mt-2" type="submit">Buscar</button>
			</div>
		</form>
		<?php
		if ($arrCEP != null){
			?>
		<div class="mt-3" id="showResult" style="display: block;">
			<p>CEP: <?=$arrCEP->cep; ?></p>
			<p>Logradouro: <?=$arrCEP->logradouro; ?></p>
			<p>Complemento: <?=$arrCEP->complemento; ?></p>
			<p>Bairro: <?=$arrCEP->bairro; ?></p>
			<p>localidade: <?=$arrCEP->localidade; ?></p>
			<p>uf: <?=$arrCEP->uf; ?></p>
			<p>ibge: <?=$arrCEP->ibge; ?></p>
			<p>gia: <?=$arrCEP->gia; ?></p>
			<p>ddd: <?=$arrCEP->ddd; ?></p>
			<p>siafi: <?=$arrCEP->siafi; ?></p>
		</div>
		<?php
		}
		?>
		
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>