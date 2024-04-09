<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo_estetica.jpg">
	<link rel="stylesheet" type="text/css" href="css/Formulario.css">
    </head>
<body>
    <h1>acceda para ser cliente</h1>

    <form method="post">
       <input type="text" name="Nombre" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
        <input type="password" name="contraseña" placeholder="Contraseña">
        <input type="text" name="direccion" placeholder="direccion">
    	<input type="submit" name="registrar" href="productos.php">
     </form>
     <?php 
        include("config/registrar.php");
        ?>
</body>
</html>