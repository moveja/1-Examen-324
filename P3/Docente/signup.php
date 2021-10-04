<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Registro</h1>
    	<input type="text" name="ci" placeholder="Ci">
		<input type="text" name="usuario" placeholder="Estudiante o Docente">
    	<input type="text" name="password" placeholder="Password">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>