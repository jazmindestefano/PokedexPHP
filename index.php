<!DOCTYPE html>
<html>
<head>
    <title>Dark Mode Login</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <header>
        <h1>Login Pokedex</h1>
    </header>
    <main>
        <form action="dashboard/dashboard.php" method="post">
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" value="Login">Login</button>
        </form>
        <div class="register-button">
            <p>No tenes una cuenta? <a href="register/register.php">Registrate</a></p>
        </div>
    </main>
</body>
</html>

