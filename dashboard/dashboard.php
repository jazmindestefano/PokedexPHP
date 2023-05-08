<?php
$servername = "localhost";
$username = "root";
$password = '';
$database = "pokemon";

$conn = new mysqli($servername, $username, $password, $database) or die();

if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $sql = "SELECT * FROM pokemones WHERE nombre LIKE '%$search%'";
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
            if (isset($_GET['search']) && !empty($_GET['search'])) {
                $search = strtolower($_GET['search']);
                $nombre = strtolower($element['nombre']);
                if (strpos($nombre, $search) !== false) {
                    echo '<li class="pokemon-list"><a href="../pokemon-detalle/pokemon-detalle.php?id=' . $element['idPokemon'] . '">' . $element['nombre'] . '</a></li><br/>';
                }
                } else {
                    echo '<li class="pokemon-list"><a href="../pokemon-detalle/pokemon-detalle.php?id=' . $element['idPokemon'] . '">' . $element['nombre'] . '</a></li><br/>';
                }
            }
        ?>
    </ul>
</main>
</body>
</html>

