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
		header('location:agregarPokemon.php?add=false');
		exit();
	}


	$servername = "localhost";
	$username = "root";
	$password = '';
	$database = "pokemon";
	$conn = new mysqli($servername, $username, $password, $database) or die();


	$nombre = $_POST["nombrePokemon"];
	$tipo = $_POST["tipoPokemon"];
	$desc = $_POST["descripcionPokemon"];


	$sql = "INSERT INTO pokemones (nombre, tipo , descripcion) VALUES (?,?,?)";
	$statement = $conn->prepare($sql);
	$statement->bind_param("sss", $nombre, $tipo, $desc);
	$result = $statement->execute();

	if ($result) {
		header('Location: agregarPokemon.php?add=true');
		exit();
	}
