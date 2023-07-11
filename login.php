<?php
session_start();
require_once('db_connect.php');

// Verifica si el usuario ha enviado el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Verifica si el usuario y la contraseña son válidos
    $stmt = $pdo->prepare('SELECT * FROM usuarios WHERE usuario = ?');
    $stmt->execute([$usuario]);
    $user = $stmt->fetch();


    if ($user && $user['clave'] == $clave) {
        // Inicia la sesión del usuario
  

        // Redirige al usuario a la página correspondiente
        if ($user['acceso'] == 1) {
                 
        $_SESSION['usuario'] = $user['usuario'];
        $_SESSION['acceso'] = $user['acceso'];
         $_SESSION['nombre']=  $user['nombre'];
         $_SESSION['apellido']= $user['apellido'];

            header('Location: page1.php');
            exit();
        }  elseif ($user['acceso'] == 3) {
        $_SESSION['usuario'] = $user['usuario'];
        $_SESSION['acceso'] = $user['acceso'];
            header('Location: admin.php');
            exit();
        }
    } else {
        // Muestra un mensaje de error si el usuario o la contraseña son incorrectos
        $error_message = 'Usuario o contraseña incorrectos';
        
    }
}

// Si el usuario no ha enviado el formulario de inicio de sesión o si hay un error en la autenticación, muestra el formulario de inicio de sesión
?>
<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php if (isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="clave">Contraseña:</label>
        <input  type="password" id="clave" name="clave" required >
 




        <input type="submit" value="Iniciar Sesión">
    </form>
    <p>No tienes una cuenta? <a href="register.php">Registrarse</a></p>
</body>
</html>