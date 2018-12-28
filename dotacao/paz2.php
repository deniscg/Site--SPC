
<table width="56%" border="1" align="center">

  <tr>

    <td width="47%" colspan="5">Nome</td>

    

  </tr>
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
                echo "<tr><td>{$row[1]}</td>"; 
                echo "<td>{$row[2]}</td>";
                echo "<td>{$row[3]}</td>";
                echo "<td>{$row[4]}</td>";
                echo "<td>{$row[5]}</td>";                
        }
   
    mysqli_free_result($exe_busca);  

  
    

?>
</table>