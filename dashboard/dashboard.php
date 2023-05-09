<?php

	session_start();
	if(!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] !== true){
		header("Location: ../index.php");
		exit;
	}

    $servername = "localhost";
    $username = "root";
    $password = '';
    $database = "pokemon";

    $conn = new mysqli($servername, $username, $password, $database) or die();


    // con esta query si le agregas un nombre que no coincide
    // con ningun pokemon te agregar todos lo pokemones a $resultado

    $pokemon_existe = true;

    if (isset($_GET['search'])) {
        $search = mysqli_real_escape_string($conn, $_GET['search']);
        $sql = "SELECT * FROM pokemones WHERE nombre LIKE '%$search%'";
        $result = $conn->query($sql);
        $resultado = $result->fetch_all(MYSQLI_ASSOC);
        if (count($resultado) == 0) {
            $sql = "SELECT * FROM pokemones";
            $pokemon_existe = false;
        }
    } else {
        $sql = "SELECT * FROM pokemones";
    }


    $result = $conn->query($sql);
    $resultado = $result->fetch_all(MYSQLI_ASSOC);
    $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>búsqueda de pokemones</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<header>
    <div class="logo">
        <img src="logo.png" alt="Logo">
        <h1>Pokédex</h1>
    </div>
    <nav>
        <ul>
            <li ><audio class="cancion" controls>
                    <source src="../images/Pokemon.mp3" type="audio/mp3">
                </audio></li>
            <li><a href="#">Inicio</a></li>
            <li><a class="logout-button" href="../index.php">Log out <img class="logout-icon" src=".././images/logout.png" alt=""></a>
            </li>
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

            if (!$pokemon_existe) {
                echo '<li class="pokemon-inexistente">POKEMON NO ENCONTRADO</li><br>';
            }

            foreach ($resultado as $element) {
                echo '<li class="pokemon-list"><a href="../pokemon-detalle/pokemon-detalle.php?id=' . $element['idPokemon'] . '">' . $element['nombre'] . '</a></li><br/>';
            }

        ?>


    </ul>
</main>
</body>
</html>

