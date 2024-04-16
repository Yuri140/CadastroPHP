<?php
include_once 'conexao_bd.php';
session_start();

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT id, username, password FROM users WHERE username = '$username' and password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $_SESSION["username"] = $row["username"];
            $_SESSION["password"] = $row["password"];
            header('location: welcome.php');
        }
    } else {
        $error_message = "Usuário ou senha inválidos!!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style> 
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            color: #ff0000;
            font-size: 14px;
            margin-bottom: 10px;
            margin-top: 10px;

        }
    </style>
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <label for="username">Usuário:</label><br>
        <input type="text" id="username" name="username" required autocomplete="off"><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required autocomplete="off"><br>
        <input type="submit" value="Logar">
        <div class="error-message"><?php echo $error_message; ?></div>
    </form>
</body>
</html>
