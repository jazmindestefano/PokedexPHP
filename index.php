<!DOCTYPE html>
<html>
<head>
    <title>Dark Mode Login</title>
    <style>
        body {
            background-color: #222;
            color: #fff;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            margin: 0;
            padding: 0;
        }

        form {
            background-color: #333;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
            margin: 50px auto;
            max-width: 400px;
            padding: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 30px;
            text-align: center;
        }

        input[type="text"], input[type="password"] {
            background-color: #444;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            margin-bottom: 20px;
            padding: 10px;
            width: 100%;
        }

        button {
            background-color: #555;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            padding: 10px;
            transition: background-color 0.2s ease;
            width: 40%;
        }

        button:hover {
            background-color: #666;
        }

        div {
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Login Pokedex</h1>
    </header>
    <main>
        <form action="dashboard.php" method="post">
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
    </main>
</body>
</html>

