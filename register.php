<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
    <style>
        body {
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        h2 {
            margin-top: 0;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            line-height: 1.5;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            line-height: 1.5;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #444;
        }
    </style>
</head>
<body>
<form>
    <h2>Registro</h2>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>
    <label for="confirm-password">Confirmar contraseña:</label>
    <input type="password" id="confirm-password" name="confirm-password" required>
    <input type="submit" value="Registrarse">
</form>
</body>
</html>

