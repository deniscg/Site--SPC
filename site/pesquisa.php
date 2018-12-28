<table width="56%" border="1" align="center">

  <tr>

    <td width="47%">Nome</td>

    <td width="53%">Matricula</td>

  </tr>
<?php
include("config.php");
   
   //$conn = mysqli_connect($server, $user, $pw, $bdname) or die ( 'Connection Error' );
   $sqlquery = "SELECT * FROM Login";

   $result = mysqli_query($link, $sqlquery) or die ( mysqli_error( $link ) );

   //$header = true;
   while ($row = mysqli_fetch_assoc($result)) {
    if( !$header ) {
        foreach( $row as $campo ) {
              //  echo "Table: {$campo[4]}\n";            
                echo "<tr><td>{$row[4]}</td></tr>"; 
         //  echo'<th>'.htmlentities( $campo ).'</th>';
        }
        //$header = false;
     }

    }
/*
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
   echo '</table>';*/
?>
</table>