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

$id = $_GET["id"];

$sql = "DELETE FROM pokemones WHERE idPokemon = $id";
mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn) > 0) {
    header("Location: ../dashboard/dashboard.php");
} else {
    header("Location: ../dashboard/dashboard.php");
}
$conn->close();
?>
