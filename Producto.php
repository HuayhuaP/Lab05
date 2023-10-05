<?php
if(isset($_POST['valor1']) && isset($_POST['valor2'])) {
    $numero1 = $_POST['valor1']; 
    $numero2 = $_POST['valor2']; 
    $producto = $numero1 * $numero2; 

    echo "El Producto de la Operación es $producto"; 
} else {
    echo "Por favor, introduce los valores en el formulario.";
}
?>

