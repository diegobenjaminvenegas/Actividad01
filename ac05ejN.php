<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres</title>
</head>
<body>
<?php
// Array de nombres y apellidos
$nombres = array(
    "JUAN", "PEDRO", "MARÍA", "RAÚL", "LUIS", "ANA", "JOSÉ", "LAURA", "SOFÍA", "DAVID",
    "CARLA", "JAVIER", "MARTA", "DANIEL", "ELENA", "PABLO", "LUCÍA", "DIEGO", "PAULA", "MARIO"
);

$apellidos = array(
    "GÓMEZ", "PÉREZ", "RODRÍGUEZ", "SÁNCHEZ", "MARTÍNEZ", "GONZÁLEZ", "FERNÁNDEZ", "LÓPEZ", "DÍAZ", 
    "TORRES", "RUIZ", "JIMÉNEZ", "MORENO", "ÁLVAREZ", "ROMERO", "GUTIÉRREZ", "NAVARRO", "ORTEGA",
    "SERRANO", "RAMÍREZ"
);


// Función para combinar y formatear nombres y apellidos
function combinarNombresApellidos($nombres, $apellidos) {
    $nombres_apellidos_combinados = array();
    $total_nombres = count($nombres);
    $total_apellidos = count($apellidos);

    // Combinar nombres y apellidos de forma aleatoria
    for ($i = 0; $i < $total_nombres; $i++) {
        $nombre = $nombres[$i];
        $apellido = $apellidos[rand(0, $total_apellidos - 1)];
        $nombre_formateado = ucfirst(strtolower($nombre));
        $apellido_formateado = ucfirst(strtolower($apellido));
        $nombres_apellidos_combinados[] = $nombre_formateado . ' ' . $apellido_formateado;
    }

    return $nombres_apellidos_combinados;
}

// Combinar y formatear nombres y apellidos
$nombres_apellidos_combinados = combinarNombresApellidos($nombres, $apellidos);

// Imprimir el resultado
echo "<pre>";
print_r($nombres_apellidos_combinados);
echo "</pre>";
?>

</body>
</html>