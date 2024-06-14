<?php

$inventario = [];
function agregarProducto($nombre, $precio, $cantidad, $modelo) {
    global $inventario;

    $producto = [
        'nombre' => $nombre,
        'precio' => $precio,
        'cantidad' => $cantidad,
        'modelo' => $modelo
    ];

    $inventario[] = $producto;
}