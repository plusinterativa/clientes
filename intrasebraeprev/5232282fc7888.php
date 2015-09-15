<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<div id="rodape-geral" style="margin-top:0px;background:#fff">



<div id="cadastrar" style="background:#fff;">

<h1 style="font-size:32px;text-align:left;font-weight:600; color:#1e84ce;font-family:handel,calibri,arial;">Alteração de Senha</h1>

<h2 style="margin-top:10px;text-align:left;">Digite Sua Nova Senha Abaixo!</h2>

<form method="post" action="index.php?trocaSenha=true&page=5232282fc7888" id="formValidaSenha">

<table>



<tr>

<td valign="middle" class="texto">Nova Senha</td>

<td><input type="password" tabindex="1" id="mail" name="newPass" style="border:1px solid #666;" value="<?php if(isset($_POST["newPass"])) { echo $_POST["newPass"]; } ?>" /></td>

</tr>



<tr>

<td valign="middle" class="texto">Confirmação de Senha</td>

<td><input type="password" tabindex="1" id="nome" name="confirmPass" style="border:1px solid #666;" value="<?php if(isset($_POST["confirmPass"])) { echo $_POST["confirmPass"]; } ?>" /></td>

</tr>



<tr>

<td></td>

<td align="right" id="teste-link" valign="bottom">

<a href="index.php">Inicio </a> / <a href="http://www.sebraeprev.com.br" target="_blank">Conheça o Sebrae Previdência</a> / <a href="http://sebraeprev.com.br/?secao=secoes.php&sc=112&sub=MA==&url=contato.php" target="_blank">Fale Conosco</a>

<button type="submit" id="botao" name="btn"><b>Alterar Senha</b></button>

</td>

</tr>

	<input type="hidden" name="nameUser" value="<?php echo $_GET["nameUser"]; ?>" />

	<input type="hidden" name="page" value="<?php echo $_GET["page"]; ?>" />

</table>

</form>

	<?php include("php/alteraSenha.php"); ?>

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

		echo $consulta["texto"];

	?>



</div>



</div><!--fecha content-premium-->

</div><!-- fecha rodape-geral -->

	