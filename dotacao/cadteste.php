<?php
include("config.php");
$fonte = $_POST['fonte'];
$dotacao = $_POST['dotacao'];
$desc_fonte = $_POST['desc_fonte'];
$desc_dot = $_POST['desc_dot'];
$valor = $_POST['valor'];

$sql = "INSERT INTO dotacao(Fonte,Dotacao,Desc_fonte,Desc_dot,Valor) VALUES ('$fonte','$dotacao','$desc_fonte','$desc_dot','$valor')"; 
mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($link);
echo "Cliente cadastrado com sucesso!";
//echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=pagina6.html">';
?>
