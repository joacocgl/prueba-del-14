<?php

$productos = [];
function agregarProducto(&$productos, $nombre, $valor, $modelo, $cantidad) {
    $producto = [
       "nombre" => $nombre,
       "valor" => $valor,
       "modelo" => $modelo,
       "cantidad" => $cantidad
    ];

    $productos[] = $producto;

    echo "Producto agregado exitosamente.\n";
}

print_r($productos);
?>