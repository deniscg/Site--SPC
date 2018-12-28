<?php
include("config.php");
$nome  = $_REQUEST['nome'];
$email = $_REQUEST['email'];


        if($nome!=""|| $email!=""){
            $sql_inclu = "INSERT INTO Login(usuario, email) VALUES
            ('$nome', '$email')";
            $exe_inclu = mysqli_query($link,$sql_inclu) or die (mysql_error());	  
            echo "Seu nome &eacute; <strong>$nome</strong>, teu email <strong>$email</strong> e...<br/><br/>VIVA O LINUX!!!";
        }else{
            echo "Seu nome &eacute; <strong>$nome</strong>, teu email <strong>$email</strong> e...<br/><br/>VIVA O LINUX!!!";
        }
 

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
