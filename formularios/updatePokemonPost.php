<?php
session_start();
if (!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] !== true) {
    header("Location: ../index.php");
    exit;
}

if (empty($_POST["nombrePokemon"]) ||
    empty($_POST["tipoPokemon"]) ||
    empty($_POST["descripcionPokemon"])
) {
    header('location:updatePokemon.php?edit=false');
    exit();
}


$servername = "localhost";
$username = "root";
$password = '';
$database = "pokemon";
$conn = new mysqli($servername, $username, $password, $database) or die();

$id = $_GET['id'];
$nombre = $_POST["nombrePokemon"];
$tipo = $_POST["tipoPokemon"];
$desc = $_POST["descripcionPokemon"];


$sql = "UPDATE pokemones SET nombre=trim('$nombre'), tipo=trim('$tipo'), descripcion='$desc' WHERE idPokemon=$id";
$resultado = mysqli_query($conn, $sql);


if ($resultado) {
    header('Location: updatePokemon.php?id=' . $id . '&edit=true');
    exit();
}

