
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Cadastro de produto</title>
	<link rel="stylesheet" href="css/index.css">
	
	<?php
		include('class/classControl.php');
		$ctrl = new control();
		if($_POST){
			/*$nome_produto = $_POST['produto'];
			$preco = $_POST['preco'];
			$descricao = $_POST['descricao'];
			$data = $_POST['data'];*/
			
			$contact = $ctrl->cadastro($_POST['produto'],$_POST['preco'],$_POST['descricao'],$_POST['data']);
		}
	?>
  </head>
  <body>
  <div class="col-md-12">
		<div class="col-md-5">
			Bem vindo a página de cadastro
		</div>
		<form method="post" action="lista.php" name="cadastro">
			<div class="col-md-6 box_register">
				<div class="container">
					<div class="row">
						<div class="col-md-6 inputs">
							<label for="exampleFormControlInput1">Nome do produdo:</label>
							<input type="text" class="form-control input" id="exampleFormControlInput1" placeholder="Nome" name="produto">
							<br>
							<label for="exampleFormControlInput1">Preço:</label>
							<input type="text" class="form-control input" id="exampleFormControlInput1" placeholder="preço(R$)" name="preco">
							<br>
						</div>
						
						<div class="col-md-6 inputs">
							<label for="exampleFormControlInput1">Data de cadastro:</label>
							<input type="datetime-local" class="form-control input" id="exampleFormControlInput1" name="data">
							<br>
							<label for="exampleFormControlInput1">Descrição:</label>
							<textarea class="form-control input" id="exampleFormControlTextarea1" rows="3" name="descricao"></textarea>
							<br>
						</div>
					</div>
					<button class="btn btn-primary botao" type="submit" name="button_enviar">Cadastrar</button>
							<br></br>
				</div>	
			</div>
		</form>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>