<?php
include("config.php");
$login = $_POST['loginn'];
$senha = $_POST['senha'];
$senha = $_POST['senha2'];
$email = $_POST['email'];

$sql = "INSERT INTO dados(loginn,senha,Email) VALUES ('$login', '$email','$senha')"; 
mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($link);
//echo "Cliente cadastrado com sucesso!";
echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=index.html">';
?>
