<?php
$servername = "localhost";
$username = "root";
$password = '';
$database = "pokemon";

$conn = new mysqli($servername, $username, $password, $database) or die();

$sql = "SELECT * FROM pokemones";
$result = $conn->query($sql);
$resultado = $result->fetch_all(MYSQLI_ASSOC);
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>búsqueda de pokemones</title>
    <style>
        body {
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
        }

        header {
            background-color: #333;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 50px;
            margin-right: 10px;
        }

        .logo h1 {
            font-size: 24px;
            margin: 0;
            padding: 0;
        }

        nav {
            padding: 10px 20px;
        }

        nav ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            margin-left: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        /* Estilos del formulario de búsqueda */
        main {
            margin: 50px auto;
            max-width: 800px;
            padding: 20px;
        }

        form {
            display: flex;
            margin-bottom: 20px;
        }

        input[type="text"] {
            border: none;
            border-radius: 5px;
            font-size: 16px;
            padding: 10px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #555;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            margin-left: 10px;
            padding: 10px;
            transition: background-color 0.2s ease;
        }

        input[type="submit"]:hover {
            background-color: #666;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        li {
            border-radius: 5px;
            margin-bottom: 10px;
            cursor: pointer;
            color: white;
        }

        .pokemon-list {
            border-radius: 5px;
            margin-bottom: 10px;
            cursor: pointer;
            background: #eee;
            padding: 20px;
        }

        a {
            color: black;
            text-decoration: none;
            font-weight: bold;
        }

        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <img src="logo.png" alt="Logo">
        <h1>Pokédex</h1>
    </div>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Log out</a></li>
        </ul>
    </nav>
</header>
<main>
    <form>
        <input type="text" id="search" name="search" placeholder="Buscar pokemones...">
        <input type="submit" value="Buscar">
    </form>
    <h2>Resultados de búsqueda:</h2>
    <ul>
        <?php
            foreach ($resultado as $element) {
                echo "<li><a>" . $element['nombre'] . "</a></li>" . "<br/>";
            }
        ?>
    </ul>
</main>
</body>
</html>

