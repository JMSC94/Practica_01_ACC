<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>Pagina Uno </title>
</head>
<body>
	<nav id = "Nav">
	<h1>Login</h1>
	</nav>

	<form action="validar.php" method="POST">
		<p><label for="nombre">Usuario</label></p>
		<p><input type="text" name="nombre"></p>

		<p><label for="contra">Contraseña</label></p>
		<p><input type="text" name="contra"></p>

		<p><input type="submit" value="Acceder"></p>
	</form>

</body>
</html>