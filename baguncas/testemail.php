<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php
     //$destino = $emaild;
     $destino = "denispereiracg@hotmail.com";
   // Emaild é o e-mail da pessoa que vai receber a mensagem
    $remail = "canalwebmail@canalwebcg.com.br";
    // Remail é o e-mail do qual você vai enviar todos os e-mails para clientes
    $assunto = "Email de Teste";
      // Aqui vem o assunto da mensagem
    $mensagem = "Este e-mail é um teste de envio apenas para ver que funciona!";
    $headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: Seu Web Site <$remail>\n";
    $headers .= "Return-Path: <$remail>\n";
                         if ($assunto=="" or $mensagem=="")
                         {
                         	  die("Erro! Acesso no permitido!");
                       	  } else {
                             		  mail($destino,$assunto,$mensagem,$headers);
                                       		  echo "<p id='htext'>Agradecemos o Contato! <br> Sua mensagem foi enviada corretamente.</p>";
                     	  }
  ?>

</BODY>
</HTML>
