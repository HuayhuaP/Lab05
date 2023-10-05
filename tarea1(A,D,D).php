<?php
function calcular_sueldo($importe_vendido, $num_hijos) {
 
    $sueldo_basico = 600;
    $comision_porcentaje = 0.075;
    $bonificacion_por_hijo = 50;
    $descuento_porcentaje = 0.11;

  
    $comision = $importe_vendido * $comision_porcentaje;

   
    $bonificacion = $num_hijos * $bonificacion_por_hijo;


    $sueldo_bruto = $sueldo_basico + $comision + $bonificacion;


    $descuento = $sueldo_bruto * $descuento_porcentaje;

   
    $sueldo_neto = $sueldo_bruto - $descuento;

    return array($comision, $bonificacion, $sueldo_bruto, $descuento, $sueldo_neto);
}

list($comision, $bonificacion, $sueldo_bruto, $descuento, $sueldo_neto) = calcular_sueldo(5000, 2);
echo "Comisión: S/. " . number_format($comision, 2) . "\n";
echo "Bonificación: S/. " . number_format($bonificacion, 2) . "\n";
echo "Sueldo Bruto: S/. " . number_format($sueldo_bruto, 2) . "\n";
echo "Descuento: S/. " . number_format($descuento, 2) . "\n";
echo "Sueldo Neto: S/. " . number_format($sueldo_neto, 2) . "\n";
?>
