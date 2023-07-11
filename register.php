<?php
require_once('db_connect.php');

// Verifica si el usuario ha enviado el formulario de registro
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $confirmar_clave = $_POST['confirmar_clave'];

    // Verifica si la contraseña cumple con los requisitos
    $uppercase = preg_match('@[A-Z]@', $clave);
    $lowercase = preg_match('@[a-z]@', $clave);
    $number = preg_match('@[0-9]@', $clave);
    $special_chars = preg_match('@[^\w]@', $clave);

    if (!$uppercase || !$lowercase || !$number || !$special_chars || strlen($clave) < 8 || strstr($clave, ' ')) {
        $error_message = 'La contraseña debe incluir al menos una letra mayúscula, una letra minúscula, un número, un carácter especial, no debe tener espacios en blanco y debe tener una longitud de al menos 8 caracteres.';
    } elseif ($clave != $confirmar_clave) {
        $error_message = 'Las contraseñas no coinciden.';
    } else {
        // Agrega el usuario a la base de datos
        ////  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare('INSERT INTO usuarios (nombre, apellido, edad, correo, usuario, clave, acceso) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([$nombre, $apellido, $edad, $correo, $usuario, $clave, 1]);

        // Redirige al usuario a la página de inicio de sesión
        header('Location: login.php');
        exit();
    }
}

// Si el usuario no ha enviado el formulario de registro o si hay un error en el registro, muestra el formulario de registro
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrarse</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2>Registrarse</h2>
    <?php if (isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>
    <form class="form-grid" method="post" action="register.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" required>

        <label for="confirmar_clave">Confirmar contraseña:</label>
        <input type="password" id="confirmar_clave" name="confirmar_clave" required>

        <input type="submit" value="Registrarse">
    </form>

    <p>Ya tienes una cuenta? <a href="login.php">Entrar</a></p>
</body>
</html>