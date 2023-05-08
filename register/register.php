<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="../scripts/error.css">
    <script type="text/javascript" src="../scripts/validacionFormularios.js"></script>
</head>
<body>
<form class="form-register" method="post" action="registerPost.php" onsubmit="return validarFormularioDeRegistro()">
    <h2>Registro</h2>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">

    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email">

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password">

    <label for="confirm-password">Confirmar contraseña:</label>
    <input type="password" id="confirm-password" name="confirm-password">

    <div id="error-message-registro"></div>

    <input type="submit" value="Registrarse">
</form>
<c
</body>
</html>


