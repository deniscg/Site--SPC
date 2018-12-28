<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title> Testando conexão ao banco de dados </title>
</head>
<body>
  <h3>Formulário de Cadastro de Clientes</h3><br>
  <form name="Cadastro" action="cadautorizacao.php" method="POST">
    <label>Nome: </label>
    <input type="text" name="nome" size="30"><br>
    <label>Senha: </label>
    <input type="text" name="senha" size="45"><br>
    <label>Email: </label>
    <input type="text" name="email" size="45"><br>
    <input type="submit" name="enviar" value="Enviar">
  </form>

<?php
include("config.php");
   
   //$conn = mysqli_connect($server, $user, $pw, $bdname) or die ( 'Connection Error' );
   $sqlquery = "SELECT usuario FROM Login";

   $result = mysqli_query($link, $sqlquery) or die ( mysqli_error( $link ) );

   $header = true;
   echo '<table>';
   while( $res = mysqli_fetch_assoc( $result ) ) {
      if( $header ) {
         foreach( $res as $campo => $valor ) {
            echo'<th>'.htmlentities( $campo ).'</th>';
         }
         $header = false;
      }
      echo '<tr>';
      foreach( $res as $campo => $valor ) {
         echo'<td>'.htmlentities( $valor ).'</td>';
      }
      echo '</tr>';
   }
   echo '</table>';
?>

</body>
</html>
