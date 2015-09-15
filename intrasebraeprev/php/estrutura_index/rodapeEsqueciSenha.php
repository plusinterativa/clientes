<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<div id="rodape-geral" style="margin-top:0px;background:#fff">



<div id="cadastrar" style="background:#fff;">

<h1 style="font-size:32px;text-align:left;font-weight:600; color:#1e84ce;font-family:handel,calibri,arial;">Recuperação de Senha</h1>

<h2 style="margin-top:10px;text-align:left;">Digite Seus Dados Abaixo!</h2>

<form method="post" action="index.php?esqueciSenha=true" id="formValidaSenha">

<table>



<tr>

<td valign="middle" class="texto">Usuário</td>

<td><input type="text" tabindex="1" id="mail" name="user" style="border:1px solid #666;" value="<?php if(isset($_POST['user'])) { echo $_POST['user']; } ?>" /></td>

</tr>



<tr>

<td valign="middle" class="texto">E-mail</td>

<td><input type="text" tabindex="1" id="nome" name="mail" style="border:1px solid #666;" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /></td>

</tr>



<tr>

<td></td>

<td align="right" id="teste-link" valign="bottom">

<a href="index.php">Inicio </a> / <a href="http://www.sebraeprev.com.br" target="_blank">Conheça o Sebrae Previdência</a> / <a href="http://sebraeprev.com.br/?secao=secoes.php&sc=112&sub=MA==&url=contato.php" target="_blank">Fale Conosco</a>

<button type="submit" id="botao" name="btn"><b>Recuperar</b></button>

</td>

</tr>



</table>

</form>

	<?php include("php/validaNovaSenha.php"); ?>

</div>



<div id="teste">

	<img src="../../imagens/cadeado.png" />

</div>





<div id="website">Intranet Sebrae Previdência - Desenvolvido por Deivide Guimarães</div>

<di id="copyright">Copyright 2013 todos os direitos reservados</div>





<div id="clientes">

<?php

		include("php/conexao.php");

		$sql = "SELECT * FROM endRodape";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);

		echo $consulta['texto'];

	?>



</div>



</div><!--fecha content-premium-->

</div><!-- fecha rodape-geral -->