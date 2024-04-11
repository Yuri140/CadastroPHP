<?php
session_start();

if (isset($_SESSION["username"])) {
    echo "Bem vindo " . $_SESSION["username"];
    
  header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
        input[type="password"],
        input[type="email"] {
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
    </style>
</head>
<body>
    <form action="cadastrar.php" method="post">
        <h2>Cadastro</h2>
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="lastname">Sobrenome:</label><br>
        <input type="text" id="lastname" name="lastname"><br>
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf"><br>
        <label for="gender">Sexo:</label><br>
        <input type="text" id="gender" name="gender"><br>
        <label for="username">Usuário:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
