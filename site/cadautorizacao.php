<?php
include("config.php");
$login = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$sql = "INSERT INTO Login(usuario, senha,email) VALUES ('$login', '$senha','$email')"; 
mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($link);
echo "<script>location.href='autorizacao.php';</script>"; 
?>
