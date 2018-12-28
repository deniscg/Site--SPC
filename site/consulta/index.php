<?php
// Criado por Marcos Peli
// ultima atualização 01/Junho/2017 - correçâo ref alteraçâo consulta CPF na receita e otimização de scripts
// introduzidos parametro token_cpf. Obtenção de token e captcha para consulta de CPF introduzidos no script getcaptcha.php
// getcaptcha.php agora é incluido para dentro de index.php e os captchas não são mais gerados pela bib. GD

// o objetivo dos scripts deste repositório é integrar consultas de CNPJ e CPF diretamente da receita federal
// para dentro de aplicações web que necessitem da resposta destas consultas para proseguirem, como e-comerce e afins.

// importante, CPF e DATA de NASCIM. devem ser digitados no formato ###.###.###-##  e  dd/mm/aaaa
// CNPJ devem ser digitados só NUMEROS   ###########  (sem ponto ou hifem)
// essas entradas nâo foram tratadas, pois o objetivo é apenas a implementaçâo da soluçao das consulta e testes

?>
<html>

<head>
<title>CNPJ , CPF e Captcha</title>
</head>

<body>

	<form id="receita_cnpj" name="receita_cnpj" method="post" action="processa.php">
		<p><span class="titleCats">CNPJ e Captcha</span>
			<br />
			<input name="cnpj" type="text" maxlength="14" required /> 
			<b style="color: red">CNPJ</b>
			<br />
			
		</p>
		<p>
			<input id="enviar" name="enviar" type="submit" value="Consultar"/>
		</p>

	</form>
        

</body>

</html>