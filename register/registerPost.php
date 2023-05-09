<?php


	if (empty($_POST["nombre"]) ||
		empty($_POST["email"]) ||
		empty($_POST["password"]) ||
		empty($_POST["confirm-password"])
	) {
		header('location:register.php');
		exit();
	}

	$servername = "localhost";
	$username = "root";
	$password = '';
	$database = "pokemon";

	$conn = new mysqli($servername, $username, $password, $database) or die();

	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$pass = $_POST["password"];

	$sql = "INSERT INTO usuarios (nombre, email, password) VALUES (?,?,?)";
	$statement = $conn->prepare($sql);
	$statement->bind_param("sss", $nombre, $email, $pass);
	$result = $statement->execute();

	if ($result) {
		header('Location: ../index.php');
		exit();
	}

