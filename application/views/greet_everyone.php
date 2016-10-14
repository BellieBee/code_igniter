<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lista del Team Trouble</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Team <?php echo $team; ?></h1><br />
	<ul>
		<?php foreach($listas as $lista) { ?>
			<li><?php echo $lista; ?></li>
		<?php } ?>
	</ul>

	<footer>
		<a href="<?php echo site_url('welcome/index'); ?>">Hola index</a>
	</footer>
</body>
</html>