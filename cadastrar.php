<?php
class Usuario {
  public $name;
  public $lastname;
  public $email;
  public $cpf;
  public $gender;
  public $username;
  public $password;

  public function __construct($name, $lastname, $email, $cpf, $gender, $username, $password) {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->cpf = $cpf;
    $this->gender = $gender;
    $this->username = $username;
    $this->password = $password;
  }
}

$usuario = new Usuario($_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['cpf'], $_POST['gender'], $_POST['username'], $_POST['password']);

include_once('conexao_bd.php');

// Inserindo os dados no banco de dados
$sql = "INSERT INTO users (name, lastname, email, cpf, gender, username, password)
        VALUES ('$usuario->name', '$usuario->lastname', '$usuario->email', '$usuario->cpf', '$usuario->gender', '$usuario->username', '$usuario->password')";

if ($conn->query($sql) === TRUE) {
    // Configurando as variaveis da sessão
    $_SESSION["username"] = $usuario->username;
    $_SESSION["password"] = $usuario->password;
    header('location: welcome.php');
} else {
    echo "Error: ". $sql. "<br>". $conn->error;
}

// Fechando conexão com banco de dados
$conn->close();
?>