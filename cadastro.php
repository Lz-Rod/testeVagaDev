<?php
//Conexão com DB
$servername = "127.0.0.1";
$database = "testedev";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

//Verificar a conexão
if (!$conn) {
      die("Connection Falhou: " . mysqli_connect_error());
}
 
echo "Conexão efetuada com sucesso!<br>";

//Captura dos dados do Form
$nome = $_POST['nome'];
$email = $_POST['email'];

//Envio dos dados para o DB
$sql = "INSERT INTO newsletter (name, email) VALUES ('$nome', '$email')";
if (mysqli_query($conn, $sql)) {
      echo "Cadastro Efetuado com sucesso!";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<br>
<a href="index.php">Voltar</a>