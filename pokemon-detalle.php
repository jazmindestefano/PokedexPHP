<!DOCTYPE html>
<html>
<head>
    <title>Detalle de Pokémon</title>
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

        main {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        h2 {
            margin-top: 0;
        }

        .pokemon-detail {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .pokemon-image {
            margin-right: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            overflow: hidden;
        }

        .pokemon-image img {
            display: block;
            height: 300px;
            object-fit: cover;
            object-position: center;
            width: 300px;
        }

        .pokemon-info {
            flex-grow: 1;
        }

        .pokemon-name {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .pokemon-description {
            margin-bottom: 20px;
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
    <h2>Detalle de Pokémon</h2>
    <div class="pokemon-detail">
        <div class="pokemon-image">
            <img src="charizard.jpg" alt="Charizard">
        </div>
        <div class="pokemon-info">
            <h1 class="pokemon-name">Charizard</h1>
            <p class="pokemon-description">Charizard es un Pokémon de tipo Fuego/Volador. Es la evolución final de Charmand</p>
        </div>
    </div>
</main>
</body>
</html>
