<?php
include("config.php");

   $sql_busca = "SELECT * FROM dotacao";
   $exe_busca = mysqli_query($link,$sql_busca) or die (mysql_error());
   $num_busca = mysqli_num_rows($exe_busca);


   
    if (!$exe_busca) {
            echo "DB Error, could not list tables\n";
            echo 'MySQL Error: ' . mysql_error();
            exit;
    }
    
    

        while ($row = mysqli_fetch_row($exe_busca)) {                           
                echo "{$row[1]};"; 
                echo "{$row[2]};";
                echo "{$row[3]};";
                echo "{$row[4]};";
                echo "{$row[5]};";                
        }
   
    mysqli_free_result($exe_busca);  

  
    

?>
