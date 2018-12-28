<?php

include("validacnpj.php");
// dados da postagem de formulário de CNPJ
$cnpj = $_POST['cnpj'];	
$isCnpjValid=isCnpjValid($cnpj);					// Entradas POST devem ser tratadas para evitar injections

if($isCnpjValid)
{
	echo "Não deu certo";
}
else
{
	echo "Deu certo";
}


print_r($campos);
?>