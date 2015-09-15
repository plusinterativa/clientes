<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="container bar-login">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
				<div class="col-md-8 hidden-xs hidden-sm"><img class="people"src="imagens/people.png" alt=""></div>
				<div class="col-md-4">
					<div class="cadeado">
						Faça o login para acessar	
						<span>
							<img src="imagens/smallcadeado.png" class="img-cadeado" alt=""/>
						</span>
					</div>		
					<form method="post" action="php/login.php">
						<input type="text" tabindex="1" id="nome" name="user" placeholder="Usuário" onfocus="this.value = ''" /></td>
						<input type="password" tabindex="2" id="mail" name="pass" placeholder="Senha" onfocus="this.value = ''" /></td>
						<button type="submit" id="botao">
							<b>Entrar</b>
						</button>	
						<!--<a href="index.php?esqueciSenha=true">Esqueci a Senha</a>-->
						<a href="http://sebraeprevidencia.com.br/relacionamento-com-o-participante/#tab2" target="_blank">Fale Conosco</a>
						<!--<a href="http://www.sebraeprev.com.br" target="_blank">Conheça o Sebrae Previdência</a>-->
									
					</form>
				</div>

			</div>	
		</div>
	</div>
</div>
<?php include "rodape.php";?>


