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

	<table>
		<caption>Team Trouble</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Clave</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($team as $tea) { ?>
			<tr>
				<td><? echo $tea; ?></td>
			</tr>
		<? } ?>
			
		</tbody>
	</table>
</body>
</html>