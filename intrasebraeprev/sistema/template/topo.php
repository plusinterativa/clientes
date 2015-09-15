<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<div id="topo">

    	<div class="logo">

        	Logo

        </div> <!-- fecha class logo -->

        <div class="acesso">

        	<?php

				session_start();

				if (!isset($_SESSION['nome']) or !isset($_SESSION['nivel_acesso']) or $_SESSION['nivel_acesso'] <> "administrador") {

					echo '

						<script>

							alert("É Necessário um Nível Maior de Privilégios para Acessar esta Área!")

							location.href=("../../index.php")

						</script>

						';

				} else {

			?>

            	<div id="login">

                	<div class="nome">

                		Olá, <span><?php echo $_SESSION['nome']; ?> </span>, Seja Bem Vindo!

                    </div> <!-- fecha class nome -->

                    <div class="nivel_acesso">

                    	Seu Nível de Acesso é: <span> <?php  echo $_SESSION['nivel_acesso']; ?> </span>

                    </div> <!-- fecha class nivel_acesso -->

                    <div class="ajustes">

                    	

                    </div> <!-- fecha class ajustes -->

                </div> <!-- fecha id login -->

           <?php } ?>

        </div> <!-- fecha class acesso -->        

    </div> <!-- fecha id topo -->