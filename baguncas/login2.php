<html>

<head>
<title>User VIP</title>


</head>

<body>


<?php
$dbname=”u195935037_banco”; 
$usuario=”u195935037_dens“; 
$password=”denis321“; 
$hostname = “mysql.hostinger.com.br”;
if(!($id = mysql_connect($hostname,$usuario,$password)))
{
   echo "Não foi possível estabelecer
uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.";
   exit;
} 

if(!($con=mysql_select_db($dbname,$id))) { 
   echo "Denis Pereira continue tentando esta quase la";
   exit; 
} 
?>




</body>

</html>


