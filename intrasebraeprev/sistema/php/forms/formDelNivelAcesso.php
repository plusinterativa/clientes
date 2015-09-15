<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="text/javascript">

		$(document).ready(function() {

			$('#btnDelNivelAcesso').click(function(e) {

				e.preventDefault();

				var duvida = confirm('Esta ação também excluirá todos os USUÁRIOS cadastrados com este Nivel de Acesso! Você tem Certeza que deseja EXCLUIR?');

				if (duvida==true) {

					$('#formDelNivelAcesso').submit();	

				}

			});

		});

	</script>

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM nivelAcesso WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">
    <table class="table">

        <form method="post" action="php/delNivelAcesso.php" id="formDelNivelAcesso">

        	<tr>

            	<td colspan="2">

                	<h3> Excluir Registro</h3>

                </td>

            </tr>

        	<tr>

            	<td> Código no Sistema </td>

                <td> <?php echo $consulta['id']; ?></td>

            </tr>

            <tr>

            	<td> Nível de Acesso </td>

                <td> <?php echo $consulta['nivel_acesso']; ?></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Excluir" name="del" id="btnDelNivelAcesso" /></td>

            </tr>

            <input type="hidden" name="cod" value="<?php echo $consulta['id']; ?>" />

        </form>

        </table>

        </div>