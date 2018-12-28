<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>




<?php

$dbname='u195935037_banco';
$usuario='u195935037_dens';
$password='denis321';
$hostname = 'mysql.hostinger.com.br';

$mysqli = new mysqli($hostname, $usuario, $password);


if(mysqli_connect_errno())
trigger_error(mysqli_connect_error());
else {
    echo "a is smaller than b";
}


?>




</BODY>
</HTML>
