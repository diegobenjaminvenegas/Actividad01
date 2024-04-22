<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros primos</title>
</head>
<body>
<?php
// Función para verificar si un número es primo
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Función para generar N números primos aleatorios
function generarNumerosPrimos($cantidad) {
    $numeros_primos = array();
    while (count($numeros_primos) < $cantidad) {
        $numero_aleatorio = rand(1, 109); // Genera números aleatorios entre 1 y 109
        if (esPrimo($numero_aleatorio) && !in_array($numero_aleatorio, $numeros_primos)) {
            $numeros_primos[] = $numero_aleatorio;
        }
    }
    return $numeros_primos;
}

// Definir la cantidad de números primos a generar
$N = 20; // Cambiar este valor según la cantidad de números primos deseados

// Generar N números primos aleatorios menores que 110
$numeros_primos_generados = generarNumerosPrimos($N);

// Imprimir los números primos generados
print_r($numeros_primos_generados);
?>

</body>
</html>