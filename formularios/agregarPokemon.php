<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="agregarPokemon.css">
    <link rel="stylesheet" href="../dashboard/dashboard.css">
    <title>Document</title>
</head>
<body>
<header>
    <div class="logo">
        <a style="color: white" href="../dashboard/dashboard.php"><img src="../images/Pokedex.png" alt="Logo"></a>
        <h1><a style="color: white" href="../dashboard/dashboard.php">Pokédex</a></h1>
    </div>
    <nav>
        <ul>
            <li><a href="../dashboard/dashboard.php">Inicio</a></li>
            <li><a class="logout-button" href="../index.php">Log out <img class="logout-icon"
                                                                          src=".././images/logout.png" alt=""></a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <form class="form-add-pokemon" action="agregarPokemonPost.php" method="post" onsubmit="return validarFormularioDeAddPokemon()">
        <div>
            <label for="nombrePokemon">Nombre:</label>
            <input type="text" id="nombrePokemon" name="nombrePokemon">
        </div>
        <div>
            <label for="tipoPokemon">Tipo:</label>
            <input type="text" id="tipoPokemon" name="tipoPokemon">
        </div>
        <div>
            <label for="descripcionPokemon">Descripción:</label>
            <div>
                <textarea class="input-add" id="descripcionPokemon" name="descripcionPokemon"></textarea>
            </div>
        </div>
        </div>
        <button class="button-add-pokemon" name="addButton" type="submit">Agregar Pokemon</button>
    <div style="width: 100%; display: flex; justify-content: center">
			<?php if (isset($_GET["add"]) && $_GET["add"] == "true") {

				echo "<p class='pokemon-agregado'>El pokemon fue agregado correctamente</p>";
			}

            if (isset($_GET["add"]) && $_GET["add"] == "false") {

                echo "<p class='pokemon-no-agregado'>Completá los campos</p>";
            }

            ?>
    </div>
    </form>
</main>
</body>
</html>