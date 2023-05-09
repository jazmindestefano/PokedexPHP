<?php

    $servername = "localhost";
    $username = "root";
    $password = '';
    $database = "pokemon";
    $conn = new mysqli($servername, $username, $password, $database) or die();

    if (empty($_POST["username"]) || !isset($_POST["username"]) ||
        empty($_POST["password-login"]) || !isset($_POST["password-login"])
    ) {
        header('location: ../index.php');
        exit();
    }

    if (!empty($_POST["login"])) {

        $nombre = $_POST['username'];
        $userPassword = $_POST['password-login'];
        $login = mysqli_query($conn, "SELECT * FROM usuarios WHERE nombre = '$nombre' AND password = '$userPassword'");

        if (mysqli_num_rows($login) > 0) {
            session_start();
            $_SESSION["autenticado"] = true;
            if ($nombre == "admin") {
                $_SESSION['isAdmin'] = true;
            }
            header("Location: dashboard.php");
            exit();
        } else {
            header("Location: ../index.php?error=true");
            exit();
        }
    }


