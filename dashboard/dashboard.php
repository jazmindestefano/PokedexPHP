<?php
/*

    session_start();
    if (!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] !== true) {
        header("Location: ../index.php");
        exit;
    }
    $isAdmin = false;
    if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']) {
        $isAdmin = true;
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
    $conn->close(); */
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
        <a style="color: white" href="../dashboard/dashboard.php"><img src="../images/Pokedex.png" alt="Logo"></a>
        <h1><a style="color: white" href="../dashboard/dashboard.php">Pokédex</a></h1>
    </div>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a class="addpoke" href="../formularios/agregarPokemon.php">Agregá un Pokémon <img class="addpoke-icon"
                                                                                                   src=".././images/add2.png" alt=""></a></li>
            <li><a class="logout-button" href="../index.php">Log out <img class="logout-icon"
                                                                          src=".././images/logout.png" alt=""></a>
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
                echo '<li class="pokemon-list">
                         <div style="display: flex">
                         <a  href="../pokemon-detalle/pokemon-detalle.php?id=' . $element['idPokemon'] . '">
                         <img class="avatar-card" src="../images/' . $element['nombre'] . '.jpg" alt="' . $element['nombre'] . '">
                         <div style="display: flex; flex-direction: column">
                            <a class="pokemon-name" href="../pokemon-detalle/pokemon-detalle.php?id=' . $element['idPokemon'] . '">' . $element['nombre'] . '</a>  
                            <img class="pokemon-type" src="../images/' . $element['tipo'] . '.png" alt="' . $element['tipo'] . '">
                        </div>
                        </a>
                      </div> 
                      ';

                if ($isAdmin) {
                    echo '<div class="botones-accion">
                             <a href="../modificar-pokemon/modificar-pokemon.php?id=' . $element['idPokemon'] . '" class="boton-modificar">Modificar</a>
                                        <a href="../eliminar-pokemon/eliminar-pokemon.php?id=' . $element['idPokemon'] . '" class="boton-eliminar">Eliminar</a>
                            </div>';
                }
                echo '</li>';
            }
        ?>


    </ul>
</main>
</body>
</html>

