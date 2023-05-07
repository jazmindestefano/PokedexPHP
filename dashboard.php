<!DOCTYPE html>
<html>
<head>
    <title>búsqueda de pokemones</title>
    <style>
        /* Estilos del header */
        header {
            background-color: #222;
            color: #fff;
            display: flex;
            height: 60px;
            justify-content: space-between;
            padding: 10px;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 24px;
        }

        .logo img {
            height: 30px;
            margin-right: 10px;
        }

        .menu {
            display: flex;
            align-items: center;
            font-size: 16px;
        }

        .menu a {
            color: #fff;
            margin-right: 10px;
            text-decoration: none;
            transition: opacity 0.2s ease;
        }

        .menu a:hover {
            opacity: 0.8;
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
            background-color: #eee;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 20px;
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
        Mi sitio web
    </div>
    <div class="menu">
        <a href="#">Ver perfil</a>
        <a href="#">Cerrar sesión</a>
    </div>
</header>
<main>
    <form>
        <input type="text" id="search" name="search" placeholder="Buscar poquemones...">
        <input type="submit" value="Buscar">
    </form>
    <h2>Resultados de búsqueda:</h2>
    <ul>
        <li>Pikachu</li>
        <li>Charmander</li>
        <li>Bulbasaur</li>
        <li>Squirtle</li>
    </ul>
</main>
</body>
</html>

