<?php
session_start();
if (!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] !== true) {
    header("Location: ../index.php");
    exit;
}

$servername = "localhost";
$username = "root";
$password = '';
$database = "pokemon";

$conn = new mysqli($servername, $username, $password, $database) or die();

$id = $_GET['id'];
$sql = "SELECT * FROM pokemones WHERE idPokemon = $id";
$result = $conn->query($sql);
$resultado = $result->fetch_assoc();
$conn->close();

?>

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
            <li><a class="logout-button" href="../index.php">Log out <img class="logout-icon"
                                                                          src=".././images/logout.png" alt=""></a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <form class="form-add-pokemon" action="updatePokemonPost.php?id=<?php echo $id; ?>" method="post">
        <div>
        <label for="nombrePokemon">Nombre:</label>
        <?php
          echo '<input type="text" id="nombrePokemon" name="nombrePokemon" value=" ' . $resultado['nombre'] . '">';
        ?>
        </div>
        <div>
            <label for="tipoPokemon">Tipo:</label>
            <div>
                <select style="width: 100%; height: 40px; border: none; border-radius: 6px; padding: 10px; font-size: 16px" id="tipoPokemon" name="tipoPokemon">
                    <?php
                    echo '<option id="tipoPokemon" name="tipoPokemon" value=" ' . $resultado['tipo'] . '">' . $resultado['tipo'] . '</option>';
                    ?>
                    <option id="tipoPokemon" name="tipoPokemon" value="Electrico">Electrico</option>
                    <option id="tipoPokemon" name="tipoPokemon" value="Agua">Agua</option>
                    <option id="tipoPokemon" name="tipoPokemon" value="Fuego">Fuego</option>
                    <option id="tipoPokemon" name="tipoPokemon" value="Planta">Planta</option>
                </select>
            </div>
        </div>
        <div>
            <label for="descripcionPokemon">Descripción:</label>
                <?php
                 echo '<input type="text" id="descripcionPokemon" name="descripcionPokemon"  value="' . $resultado['descripcion'] . '">';
                 ?>
        </div>
        </div>
        <button class="button-add-pokemon" name="editButton" type="submit">Modificar Pokemon</button>
        <div style="width: 100%; display: flex; justify-content: center">
            <?php if (isset($_GET["edit"]) && $_GET["edit"] == "true") {

                echo "<p class='pokemon-agregado'>El pokemon fue editado correctamente</p>";
            }

            if(isset($_GET["edit"]) && $_GET["edit"] == "false") {
                echo "<p class='pokemon-no-agregado'>El pokemon no fue editado correctamente. Intente de nuevo mas tarde</p>";
            }

            ?>
        </div>
    </form>
</main>
</body>
</html>
