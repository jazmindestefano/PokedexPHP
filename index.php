<!DOCTYPE html>
<html>
<head>
    <title>Dark Mode Login</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="scripts/error.css">
    <script type="text/javascript" src="scripts/validacionFormularios.js"></script>
</head>
<body>
<header>
    <h1>Login Pokedex</h1>
</header>
<main>
    <form class="form-login" action="dashboard/dashboardPost.php" method="post"
          onsubmit="return validarFormularioDeLogin()">

        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
        </div>

        <div>
            <label for="password-login">Password:</label>
            <input type="password" id="password-login" name="password-login">
        </div>

        <div id="error-message-login"></div>

			<?php if (isset($_GET["error"]) && $_GET["error"]) {
				echo "<p class='error'>Los datos son incorrectos</p>";
			}
			?>

        <button type="submit" value="Login" name="login">Login</button>
    </form>
    <div class="register-button">
        <p>No tenes una cuenta? <a href="register/register.php">Registrate</a></p>
    </div>
</main>
</body>
</html>



