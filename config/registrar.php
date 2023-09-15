<?php
include("con-db.php");

if (isset($_POST['registrar'])){
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['email']) >= 1) {
	    $Nombre = trim($_POST['Nombre']);
	    $email = trim($_POST['email']);
		$contraseña = trim($_POST['contraseña']);
		$direccion = trim($_POST['direccion']);
	    $fechareg = date("d/m/y");
        $consulta = "INSERT INTO clientes(nombre, email, contraseña, direccion, fecha_reg) VALUES ('$Nombre','$email','$contraseña','$direccion','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
	    if ($resultado){ 
			?>
		   <h3 class="ok">te has vuelto cliente correctamente</h3>

		   <?php header("Location:productos.php"); ?>

        <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
        }
		
  }     
?>