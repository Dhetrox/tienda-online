<?php
session_start();


if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {

} else {

    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $totalCarrito = 0;

            foreach ($_SESSION['carrito'] as $key => $item) {
                $subtotal = $item['precio'] * $item['cantidad'];
                $totalCarrito += $subtotal;
                ?>
                <tr>
                    <td><?php echo $item['nombre']; ?></td>
                    <td><?php echo $item['precio']; ?></td>
                    <td><?php echo $item['cantidad']; ?></td>
                    <td><?php echo $subtotal; ?></td>
                    <td>
             <form action="config/agre_eli.php" method="post">
            <input type="hidden" name="eliminar_producto" value="true">
            <input type="hidden" name="producto_key" value="<?php echo $key; ?>">
            <button type="submit">X</button>
            </form>
                </td>
                </tr>
                </tr>
                <?php  
            }
            ?>
        </tbody>
    </table>
    <?php
}
?>
