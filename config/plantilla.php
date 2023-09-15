<?php
include("con-db.php");
class cliente {
  private $hostname= "localhost";
  private $database= "estetica";
  private $username= "root";
  private $password= "";
  private $charset= "utf8";

           function conectar() {
            try{
            $conexion=
           "mysql:host=" .$this->hostname.
            "; dbname=" .$this->database.
            ";charset=" .$this->charset;
            $options= [
              pdo::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION,
              PDO::ATTR_EMULATE_PREPARES => FALSE
            ];
            $PDO= NEW pdo($conexion, $this->username, $this->password, $options);
            return $PDO;
           } catch(PDOException $e) {
         echo"error de conexion: " . $e->getmessage();
           }
          
        }
}
?>
 <?php
  $db= new cliente();
  $con= $db->conectar();

  $sql= $con->prepare("SELECT cliente, producto, precio FROM pedidos Where id_pedido= 4");
  $sql->execute();
  $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
  foreach($resultado as $row){?>

<table class="table">
		<thead>

		<tr>
		<th> producto </th>

		<th> precio </th>

		<th> cliente </th>
   </tr>

</thead>

<tbody>
	<tr>

   <td> <?php echo $row['producto'];?></td>
   <td> <?php echo $row['precio'];?></td>
   <td><?php echo $row['cliente'];?></td>

   <?php } ?>
  </tr>
</tbody>

</table>