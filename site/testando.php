<?php
include("config.php");


   $login = $_POST['login'];
   $senha = $_POST['senha'];
   $email = $_POST['email'];
     //Verifica se os campos est�o preenchidos
     if ($_POST['login'] == "" || $_POST['senha'] == "" || $_POST['email'] == ""){
        $ac[] = "Por favou preencha todos os campos corretamente.";
     }
     else{
         if($login!=""|| $senha!=""|| $email!=""){
            $sql_inclu = "INSERT INTO Login(usuario, senha, email) VALUES
            ('$login', '$senha','$email')";
            $exe_inclu = mysqli_query($link,$sql_inclu) or die (mysql_error());	  
         }

     }


	
  
   
?>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> -->
<!DOCTYPE html>
<html>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<style type="text/css">
<!--
.Style2 {font-size: 13px}
-->
</style>
</head>

<body ng-app="myApp">

<p><a href="testando.php">Main</a></p>

<a href="#!red">Red</a>
<a href="#!green">Green</a>
<a href="#!blue">Blue</a>

<div ng-view> Aqui é uma DiV</div>

<script>
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "consulta.html"
    })
    .when("/red", {
        templateUrl : "pagina6.html"
    })
    .when("/green", {
        templateUrl : "pagina7.html"
    })
    .when("/blue", {
        templateUrl : "blue.htm"
    });
});
</script>


<?php
if (isset($ac)){
   for($i=0;$i<count($ac);$i++){
      echo "<li>".$ac[$i];
   }
}
?>
<form id="form1" name="form1" method="post" action="<? $_SERVER['PHP_SELF']?>" onclick="resetForm()">
  <table width="100%" border="0">
    <tr>
      <td colspan="2"><div align="center"><strong>Cadastro</strong></div></td>
    </tr>
    <tr>
      <td width="13%"><span class="Style2">Login:</span></td>
      <td width="87%"><span class="Style2">
        <label>
        <input name="login" type="text" id="login" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td><span class="Style2">Senha:</span></td>
      <td><span class="Style2">
        <label>
        <input name="senha" type="password" id="senha" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td><span class="Style2">Repetir senha: </span></td>
      <td><span class="Style2">
        <label>
        <input name="senha2" type="password" id="senha2" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td><span class="Style2">E-mail:</span></td>
      <td><span class="Style2">
        <label>
        <input name="email" type="text" id="email" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span class="Style2">
        <label>
        <input type="submit" name="Submit" value="Enviar" />
        </label>
      </span></td>
    </tr>
  </table>
  <p>&nbsp;</p>
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
