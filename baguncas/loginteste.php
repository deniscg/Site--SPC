<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>




<?php

/* na primeira linha usaremos o �action=ope.php� para que o formul�rio repasse as informa��es para a pagina ope.php */
<form method="post" action="ope.php" id="formlogin" name="formlogin" >
<fieldset id="fie">
<legend>LOGIN</legend><br />
<label>NOME : </label>
// o campo �name� dentro do input e importante, pois ser� ele que armazenar� os dados digitados .
<input type="text" name="login" id="login"  /><br />
<label>SENHA :</label>
<input type="password" name="senha" id="senha" /><br />
<input type="submit" value="LOGAR	"  />
</fieldset>
</form>


?>




</BODY>
</HTML>
