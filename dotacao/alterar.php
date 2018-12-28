<?php


include("config.php");
$fonte = $_POST['fonte'];
$dotacao = $_POST['dotacao'];
$valor = $_POST['valor'];

$sql = "UPDATE dotacao SET Valor='$valor' WHERE Fonte=$fonte AND Dotacao=$dotacao"; 
mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($link);
echo "Cliente cadastrado com sucesso!";

?>