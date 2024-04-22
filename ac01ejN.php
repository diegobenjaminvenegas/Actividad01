<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <?php
    // Función para detectar el navegador
    function detectarNavegador($user_agent) {
        if (strpos($user_agent, 'Firefox') !== false) {
            return 'Mozilla Firefox';
        } elseif (strpos($user_agent, 'Chrome') !== false) {
            return 'Google Chrome';
        } elseif (strpos($user_agent, 'Safari') !== false) {
            return 'Safari';
        } elseif (strpos($user_agent, 'Opera') !== false) {
            return 'Opera';
        } elseif (strpos($user_agent, 'Edge') !== false) {
            return 'Microsoft Edge';
        } else {
            return 'Navegador desconocido';
        }
    }

    // Obtener el agente de usuario del navegador
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    // Llamar a la función para detectar el navegador
    $navegador = detectarNavegador($user_agent);

    // Mostrar el mensaje de bienvenida y el navegador
    echo "<p>Estás utilizando $navegador.</p>";
    ?>
</body>
</html>
