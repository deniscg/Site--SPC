 <?php
$host = 'mysql.hostinger.com.br'; //Servidor do mysql
$user = 'u195935037_dens'; //Usuario do banco de dados
$senha = 'denis321'; //senha do banco de dados
$db = 'u195935037_banco'; //banco de dados
$nome_site = 'canalwebcg'; //Nome do site
$email = 'denipereiracg@hotmail.com'; //E-mail do administrador
$site =' http://canalwebcg.com.br'; //Seu site n se esuqece de bota o http://

$link = mysqli_connect($host, $user, $senha) or die (mysqli_error ($link));
mysqli_select_db($link,$db) or die (mysqli_error ($link)); //or die (mysqli_error($myConnection))
?>
