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

    echo "Producto agregado exitosamente.";
}

agregarProducto($productos, "agregado", 13, "modelocualquiera", 2);

print_r($productos);
?>