<?php

	$servername = "localhost";
	$username = "root";
	$password = '';
	$database = "pokemon";
	$conn = new mysqli($servername, $username, $password, $database) or die();

	if (empty($_POST["username"]) ||
			empty($_POST["password-login"])
	) {
		header('location: ../index.php');
		exit();
	}

	if(!empty($_POST["login"])) {

			$nombre = $_POST['username'];
			$userPassword = $_POST['password-login'];
			$login = mysqli_query($conn, "SELECT * FROM usuarios WHERE nombre = '$nombre' AND password = '$userPassword'");

			if(mysqli_num_rows($login) > 0) {
				// si el nombre y la contraseña son correctos, redirigimos al usuario a dashboard/dashboard.php
				header("Location: dashboard.php");
				exit();
			} else {
				// si el nombre y la contraseña son incorrectos, redirigimos al usuario a index.php
				header("Location: ../index.php");
				exit();
			}

	}


