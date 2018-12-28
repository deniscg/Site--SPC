
<table width="56%" border="1" align="center">

  <tr>

    <td width="47%">Nome</td>

    <td width="53%">Matricula</td>

  </tr>
<?php
include("config.php");
  
   $sql_busca = "SELECT * FROM Login";  
   $exe_busca = mysqli_query($link,$sql_busca) or die (mysqli_error($link));
   $num_busca = mysqli_num_rows($exe_busca);


   
    if (!$exe_busca) {
            echo "DB Error, could not list tables\n";
            echo 'MySQL Error: ' . mysqli_error();
            exit;
    }
    
    
/*
        while ($row = mysql_fetch_row($exe_busca)) {
                echo "Table: {$row[4]}\n";            
                echo "<tr><td>{$row[4]}</td></tr>";   
        }*/
        while ($row = mysqli_fetch_array($exe_busca)) {
             // echo "Table: {$row[4]}\n";            
              echo "<tr><td>{$row[4]}</td></tr>"; 
        }
   
    mysqli_free_result($exe_busca);  

  
    

?>
</table>