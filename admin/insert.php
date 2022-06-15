<!DOCTYPE html>
<html lang="pt-br">
<head>
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<title>document</title>
</head>
<body>
	<form action="envia.php" method="POST" enctype="multipart/form-data">
    <legend>Inserir</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Titulo</label>
      <input type="text" name="title" id="disabledTextInput" class="form-control">
    </div>
    <div class="mb-3">
     <label for="disabledTextInput" class="form-label">Data</label>
      <input type="date" name="data" id="disabledTextInput" class="form-control" >
    </div>
    <div class="mb-3">
      <div class="form-check">
        <label for="disabledTextInput" class="form-label">Descrição</label>
      	<input type="textarea" name="description" id="disabledTextInput" class="form-control">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>

	<input type="file" id="formGroupExampleInput3" placeholder="Insira uma imagem" name="image"/>
</form>
</body>
</html>
