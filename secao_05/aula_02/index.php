<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 05</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container w-50">
		<?php
		
		?>
		<!-- <form method="POST"> -->
			<div class="mt-5">
				<label for="Nome" class="form-label">Nome</label>
				<input type="text" class="form-control mb-3" name="txtNome" id="txtNome" placeholder="Ex.: Thiago">

                <label for="Email" class="form-label">Email</label>
				<input type="email" class="form-control mb-3" name="txtEmail" id="txtEmail" placeholder="Ex.: ex@ex.com">

                <label for="Tel" class="form-label">Telefone</label>
				<input type="text" class="form-control mb-3" name="txtTel" id="txtTel" placeholder="Ex.: 5456453211">

				<button class="btn btn-success mt-2" id="btnCadastrar" type="submit">Enviar</button>
                <span id="spResult"></span>
			</div>
		<!-- </form> -->
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>
</html>