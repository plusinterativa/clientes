<?php global $data; ?>

<style type="text/css">

	form#form-integracao > input[type="submit"] {display:inline!important;}

	a#showhidetrigger{text-decoration:underline!important;}

	#showhidetarget{position:absolute; z-index:1000; padding:10px; background: rgb(9, 41, 66); background: rgba(9, 41, 66, 0.8);}

	a:hover.fancybox-iframe{text-decoration:underline;}

	

</style>



<script>



function limpaLabel(campo,textoDefault,pass){

	if (campo.value == textoDefault){

		if (pass == "true"){

			var nome = campo.name;

			var size = campo.size;

			document.getElementById(nome + "Form").innerHTML = "<input type=\"password\" name=\"" + nome + "\" id=\"" + nome + "\" size=\"" + size + "\" class=\"input\" value=\"\" onFocus=\"limpaLabel(this,'" + textoDefault + "','true')\" onBlur=\"carregaLabel(this,'" + textoDefault + "','true')\" onload=\"this.focus();\">";



			setTimeout("document.getElementById('" + nome + "').focus()",250);

		}else{

			campo.value = "";

		}

	}

}



function carregaLabel(campo,textoDefault,pass){

	if (campo.value == ""){

		if (pass == "true"){

			var nome = campo.name;

			var size = campo.size;

			document.getElementById(nome + "Form").innerHTML = "<input type=\"text\" name=\"" + nome + "\" id=\"" + nome + "\" size=\"" + size + "\" class=\"input\" value=\"" + textoDefault + "\" onFocus=\"limpaLabel(this,'" + textoDefault + "','true')\" onBlur=\"carregaLabel(this,'" + textoDefault + "','true')\">";

		}else{

			campo.value = textoDefault;

		}

	}

}



</script>

<!--INTEGRA��O ABRE-->



<?



include("trust_config.php");

include("funcoes.php");



if ($_COOKIE[md5("logaMenu")] != ""){

	$boolLogado = true;

}

if (!$boolLogado){

?>

	

		<script language="javascript">

			function carregaSenha(){

				var teste = false;

				document.getElementById("pass2").value = document.getElementById("pass").value;

				

				if (document.getElementById("user").value == ""){ teste = true; }

				if (document.getElementById("pass2").value == ""){ teste = true; }

				

				if (teste){

					alert("Favor informar CPF e Senha para prosseguir!");

					return false;

				}

			}

		</script>

		<form name="form1" id="form-integracao" method="post" action="<?php echo($location); ?>" onsubmit="return carregaSenha();">

			<input type="hidden" name="pass2" id="pass2" value="" />

			Login <input style="color:black!important;" class="input" type="text" name="user" id="user" size="22" maxlength="11" value="CPF" onfocus="limpaLabel(this,'CPF','');" onblur="carregaLabel(this,'CPF','')">

			senha <input style="color:black!important;" class="input" type="password" name="pass" id="pass" size="22" value="Senha" onfocus="limpaLabel(this,'Senha','');" onblur="carregaLabel(this,'Senha','')">

			<input type="submit" name="bt" value="Entrar" style="background:#c7c7c7;" />

		</form>

		<!--<a href="index.php?secao=integracao-login/secoes.php&sc=65&sub=MA==&url=pg_trust.php&t=NovoUsuario.aspx" title="Primeiro acesso" class="fancybox-iframe">primeiro acesso</a>

		 | <a href="index.php?secao=integracao-login/secoes.php&sc=65&sub=MA==&url=pg_trust.php&t=RedefinirSenha.aspx" title="Esqueci a minha senha" class="fancybox-iframe">esqueci minha senha</a>-->

		 <!--<a href="<?echo($template);?>/framework/headers/integracao-login/pg_trust.php?t=NovoUsuario.aspx" title="Primeiro acesso" class="fancybox-iframe">primeiro acesso</a>

		 | <a href="<?echo($template);?>/framework/headers/integracao-login/pg_trust.php?t=RedefinirSenha.aspx" title="Esqueci a minha senha" class="fancybox-iframe">esqueci minha senha</a>-->

		

<?

}else{



		header( 'Location: http://sebraeprevidencia.com.br/wp-content/themes/Avada/framework/headers/integracao-login/pg_trust.php?t=BoletoBancario/FormularioBoleto.aspx');



}



if ($_POST['user'] != "" && $_POST['pass2'] != ""){

    

	$wsdlPath="http://" . $urlServerTrust . "/InterfaceServico/TrustInterface.asmx";

	$vl_xml= wp_remote_get($wsdlPath . "/ValidaLogin?pLogin=" . $_POST['user'] . "&pSenha=" . $_POST['pass2']);

	$vl_result = wp_remote_retrieve_body($vl_xml);

	

	if ($vl_result == FALSE){

	    

		?>

		<script language="javascript">

			alert("O servidor encontra-se fora do ar no momento!\nTente novamente dentro de alguns minutos!");

		</script>

		<?

	}else{

	    			

		$result1  = simplexml_load_string($vl_result);

	    

	    //if ($result->Valido == "true" || $_POST['pass2'] == "$#%##m4xc0d3@#$!"){

		if ($result1->Valido == "true"){

		    

			$cu_xml= wp_remote_get($wsdlPath . "/ContextualizacaoUsuarioCpf?pLogin=" . $_POST['user']);

			$cu_result = wp_remote_retrieve_body($cu_xml);

			

			

			if ($cu_result == FALSE){

				?>

				<script language="javascript">

					alert("O servidor encontra-se fora do ar no momento!\nTente novamente dentro de alguns minutos!");

				</script>

				<?

			}else{

			    

				$boolLogado = TRUE;

				

			    $result2  = simplexml_load_string($cu_result);

	            

				$menu = "<h4 class=titulo-funcs>ACESSO RESTRITO</h4>";



				foreach ($result2->Funcs->Funcionalidades as $key => $val){

					$menu .= "<a href=$template/framework/headers/integracao-login/pg_trust.php?t=" . str_replace("~/","",$val->NM_PAGINA) . " class=fancybox-iframe style=display:block>" . /*utf8_encode($val->NM_FUNCIONALIDADE)*/htmlentities ($val->NM_FUNCIONALIDADE,ENT_QUOTES,'utf-8') . "</a>";

				}

								

				setcookie(md5("logaMenu"),$menu,time()+3600,"/");

				setcookie(md5("logaNome"),$result2->NM_PESSOA,time()+3600,"/");

				setcookie(md5("logaCPF"),criptografa($result2->NR_CNPJ_CPF,"c"),time()+3600,"/");

							

				conecta();

				$sSql = "delete from mantemLogin where cpf = '" . $result2->NR_CNPJ_CPF . "'";

				mysql_query($sSql);

				

				$sSql = "insert into mantemLogin values ('" . SqlInjection($result2->NR_CNPJ_CPF) . "','" . SqlInjection($result2->NM_PESSOA) . "','" . SqlInjection($result2->NM_EMAIL) . "',now()) ";

				mysql_query($sSql);

				mysql_close();

				

				$boolLogado = TRUE;

				//header( 'Location: ' . $location);

				header( 'Location: http://sebraeprevidencia.com.br/wp-content/themes/Avada/framework/headers/integracao-login/pg_trust.php?t=BoletoBancario/FormularioBoleto.aspx');

				

				die();

			}

			

		}else{

			?>

			<script language="javascript">

				alert("Login Invalido!");

			</script>

			<?

		}

	}

	

}elseif ($_POST['user'] != ""){

	?>

	<script language="javascript">

		alert("Login Invalido!");

	</script>

	<?

}elseif ($_GET['msg'] == "1"){

	?>

	<script language="javascript">

		alert("Tempo de sessao expirado!\nSera necessario efetuar o login novamente antes de continuar.");

	</script>

	<?

}

?>

<!--INTEGRA��O FECHA-->