<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php
    // Función para validar el usuario y la contraseña
    function validarUsuarioContraseña($usuario, $contraseña) {
        $usuarios_validos = array("juan", "pedro", "maria", "raul");
        $contraseña_valida = "D153n0W3b2";

        // Verificar si el usuario y la contraseña son válidos
        if (in_array($usuario, $usuarios_validos) && $contraseña === $contraseña_valida) {
            return true;
        } else {
            return false;
        }
    }

    // Verificar si se envió el formulario
    $mostrar_formulario = true; // Variable para controlar si se muestra el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];

        // Validar el usuario y la contraseña
        if (validarUsuarioContraseña($usuario, $contraseña)) {
            echo "<p>Bienvenido, $usuario!</p>";
            $mostrar_formulario = false; // No mostrar el formulario si el inicio de sesión es exitoso
        } else {
            echo "<p>Usuario o contraseña incorrectos. Inténtalo de nuevo.</p>";
        }
    }
    // Mostrar el formulario solo si $mostrar_formulario es true
    if ($mostrar_formulario) {
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario"><br>
        <label for="contraseña">Contraseña:</label><br>
        <input type="password" id="contraseña" name="contraseña"><br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <?php
    }
    ?>
</body>
</html>
