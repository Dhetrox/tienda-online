<?php 
include("con-db.php");
$consulta="SELECT cliente, producto, precio FROM pedidos Where id_pedido= 18";?>
<table class="table">
		<thead>

		<tr>
		<th> producto </th>

		<th> precio </th>

		<th> cliente </th>
       </tr>

</thead>
<?php $resultado=mysqli_query($conex,$consulta);
while ($row=mysqli_fetch_assoc($resultado)) { ?>
<tbody>

	<tr>
	<td> <?php echo $row["producto"]; ?> </td>
	<td> <?php echo $row["precio"]; ?> </td>
	<td> <?php echo $row["cliente"];?> </td>
	</tr>

</tbody>
<?php } ?>
</table> 

