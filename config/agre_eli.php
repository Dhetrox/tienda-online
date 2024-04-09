<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['eliminar_producto'])) {
        $producto_key = $_POST['producto_key'];
        
        if (isset($_SESSION['carrito'][$producto_key])) {
            if ($_SESSION['carrito'][$producto_key]['cantidad'] > 1) {
                $_SESSION['carrito'][$producto_key]['cantidad']--;
            } else {
                unset($_SESSION['carrito'][$producto_key]);
            }
        }
    } else {
        $producto_id = $_POST['producto_id'];
        $producto_nombre = $_POST['producto_nombre'];
        $producto_precio = $_POST['producto_precio'];

        $producto = array(
            'id' => $producto_id,
            'nombre' => $producto_nombre,
            'precio' => $producto_precio,
            'cantidad' => 1 
        );

        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = array();
        }

        $producto_existente = array_filter($_SESSION['carrito'], function ($item) use ($producto_id) {
            return $item['id'] == $producto_id;
        });

        if (empty($producto_existente)) {
            $_SESSION['carrito'][] = $producto;
        } else {
            foreach ($_SESSION['carrito'] as &$item) {
                if ($item['id'] == $producto_id) {
                    $item['cantidad']++;
                }
            }
        }
    }
}


header("Location: ../carrito.php");
exit();
