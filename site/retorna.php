<?php
include("config.php");
   
   //$conn = mysqli_connect($server, $user, $pw, $bdname) or die ( 'Connection Error' );
   $sqlquery = "SELECT * FROM Login";

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