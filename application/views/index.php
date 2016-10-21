<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Teamy</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Hello its me</h2>

	<form>		
		<label>Nombre</label>
		<input type="text" id="nombre" name="nombre">
		<label>Grupo</label>
		<input type="text" id="grupo" name="grupo">
		<label>Pokemon</label>
		<input type="text" id="poke" name="poke">
		<br><br>
		<input type="submit" name="submit" id="enviar" value="Enviar ajax">
	</form>
	<hr>
	<h4 id=informe></h4>
	<br>
	<hr>

	<table>
		<caption>Tabla de pruebas con ajax</caption>
		<thead>
			<tr>
				<th>Primer número</th>
				<th>Segundo número</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="text" name="uno" id="uno"></td>
				<td><input type="text" name="dos" id="dos"></td>
			</tr>
			<tr>
				<td><span id="listo"></span></td>
			</tr>
		</tbody>
	</table>
	<br>
	<input type="submit" name="submit" value="Suma" id="sumar">
	<input type="submit" name="submit" value="Resta" id="restar">
	<input type="submit" name="submit" value="Multiplicación" id="multi">
	<input type="submit" name="submit" value="División" id="div">


	<script src="public/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script type="text/javascript">var BASE_URL = '<?= base_url() ?>' + 'index.php/';</script>
	<script src="public/js/prueba_ajax.js" type="text/javascript"></script>
</body>
</html>