
<?php
function calcular_compra($precio_actual, $unidades) {
  
    $rebaja_porcentaje = 0.05;
    $descuento_porcentaje = 0.07;
    $caramelos_por_gaseosa = 2;

    $nuevo_precio = $precio_actual * (1 - $rebaja_porcentaje);

 
    $importe_compra = $nuevo_precio * $unidades;

 
    $importe_descuento = $importe_compra * $descuento_porcentaje;


    $importe_pagar = $importe_compra - $importe_descuento;

   
    $obsequio = $unidades * $caramelos_por_gaseosa;

    return array($nuevo_precio, $importe_compra, $importe_descuento, $importe_pagar, $obsequio);
}


list($nuevo_precio, $importe_compra, $importe_descuento, $importe_pagar, $obsequio) = calcular_compra(10, 5);
echo "Nuevo Precio: S/. " . number_format($nuevo_precio, 2) . "\n";
echo "Importe de la Compra: S/. " . number_format($importe_compra, 2) . "\n";
echo "Importe del Descuento: S/. " . number_format($importe_descuento, 2) . "\n";
echo "Importe a Pagar: S/. " . number_format($importe_pagar, 2) . "\n";
echo "Obsequio: " . number_format($obsequio) . " caramelos\n";
?>
