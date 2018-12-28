<?php
include("config.php");
$login = $_POST['nome'];
$senha = $_POST['telefone'];
$email = $_POST['email'];

$sql = "INSERT INTO dados(Nome,Telefone,Email) VALUES ('$login', '$email','$senha')"; 
mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($link);
//echo "Cliente cadastrado com sucesso!";
echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=index.html">';
?>
