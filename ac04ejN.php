<!DOCTYPE html>
<html>
<head>
    <title>Análisis de Frase</title>
</head>
<body>
    <h2>Análisis de Frase</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="frase">Ingrese una frase:</label><br>
        <input type="text" id="frase" name="frase" required><br><br>
        <input type="submit" value="Analizar">
    </form>

    <?php
    // Función para contar las ocurrencias de una letra en una cadena
    function contarLetra($cadena, $letra) {
        $contador = 0;
        for ($i = 0; $i < strlen($cadena); $i++) {
            if ($cadena[$i] == $letra) {
                $contador++;
            }
        }
        return $contador;
    }

    // Función para obtener las vocales de una cadena
    function obtenerVocales($cadena) {
        $vocales = array('a', 'e', 'i', 'o', 'u');
        $vocales_encontradas = array();
        foreach ($vocales as $vocal) {
            if (stripos($cadena, $vocal) !== false) {
                $vocales_encontradas[] = $vocal;
            }
        }
        return $vocales_encontradas;
    }

    // Función para contar las ocurrencias de cada vocal en una cadena
    function contarVocales($cadena) {
        $vocales = array('a', 'e', 'i', 'o', 'u');
        $ocurrencias = array();
        foreach ($vocales as $vocal) {
            $ocurrencias[$vocal] = contarLetra(strtolower($cadena), $vocal);
        }
        return $ocurrencias;
    }

    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $frase = $_POST["frase"];

        // Contar las ocurrencias de la letra "o"
        $ocurrencias_o = contarLetra(strtolower($frase), 'o');

        // Obtener las vocales que aparecen en la frase
        $vocales_encontradas = obtenerVocales(strtolower($frase));

        // Contar las ocurrencias de cada vocal en la frase
        $ocurrencias_vocales = contarVocales($frase);

        // Imprimir resultados
        echo "<p>La letra 'o' aparece $ocurrencias_o veces en la frase.</p>";
        echo "<p>Las vocales que aparecen en la frase son: " . implode(', ', $vocales_encontradas) . "</p>";
        echo "<p>Cuántas veces aparecen cada una de las vocales:</p>";
        foreach ($ocurrencias_vocales as $vocal => $ocurrencias) {
            echo "$vocal: $ocurrencias<br>";
        }
    }
    ?>
</body>
</html>
