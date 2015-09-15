<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
	<?php
		if (!isset($_GET['acao']) or $_GET['acao'] <> 'add') {
			if (isset($_GET['acao']) and $_GET['acao'] == 'edit') {?>
				<button><a href="?menu=<?php echo base64_encode('usuarios');?>">Voltar</a></button>
				<?php include("php/forms/formEditUsuarios.php");
			} elseif (isset($_GET['acao']) and $_GET['acao'] == 'del') {?>
				<button>
					<a href="?menu=<?php echo base64_encode('usuarios');?>" >Voltar</a>
				</button>
				<?php include("php/forms/formDelUsuarios.php"); 
			} else {?>
			<div class="user-cp">
				<div class="line">
					<span>Usuários </span><div class="disc"></div>
					<li>Contas de Usuários</li>
				</div>				
					<a href="?menu=<?php echo base64_encode('usuarios');?>&acao=add">
						<button>Registrar Novo Usuário</button>
					</a>
								
			</div>
			<div class="table-responsive">
				<table class="table">
				<?php 
				include("../php/conexao.php");
				$sql = "SELECT * FROM login";
				$select = mysql_query($sql,$conexao) or die (mysql_error());
				$n = mysql_num_rows($select);
				if ($n == 0) {
				?>
					<tr><td style="font-size:16px;">Nenhum Usuário Cadastrado.</td></tr>
					<?php include("php/forms/formCadUsuarios.php");	
				} else {?>							
					<tr> 
						<td colspan="6"> Listando (<?php echo $n;?>) Usuários Encontrados em <strong> Contas de Usuário </strong></td>
					</tr>
					<tr class="bg-blue">
						<th>Código</th>
						<th>Nome</th>
						<th>Usuário </th>
						<th>Editar</th>										
					</tr>
					<?php
					$sql = "SELECT * FROM login ORDER BY id DESC";
					$select = mysql_query($sql,$conexao) or die (mysql_error());
					while ($consulta = mysql_fetch_array($select)) {?>
						<tr>
							<td><?php echo $consulta['id'];?></td>
							<td><?php echo $consulta['nome'];?></td>
							<td><?php echo $consulta['usuario'];?></td>
							<td>
								<a href="?menu=<?php echo base64_encode('usuarios');?>&acao=edit&cod=<?php echo $consulta['id'];?>"><img class="pencil" src="<?php echo $home_url;?>/imagens/pencil.png" alt=""></a>
								<a style="margin-left: 16px;"href="?menu=<?php echo base64_encode('usuarios');?>&acao=del&cod=<?php echo $consulta['id'];?>"><img class="delete" src="<?php echo $home_url;?>/imagens/delete.png" alt=""></a>
							</td>
							<?php 
							/*<td><a href="?menu=<?php echo base64_encode('usuarios');?>&acao=edit&cod=<?php echo $consulta['id'];?>">Editar</a></td>

							<td><a href="?menu=<?php echo base64_encode('usuarios');?>&acao=del&cod=<?php echo $consulta['id'];?>">Excluir</a></td>
							*/?>
						</tr>
				<?php 
					}
				}
				?>
				</table>
			</div>
		<?php
			}
		} else {
		?>
			<a href="?menu=<?php echo base64_encode('usuarios');?>" ><button>Voltar</button></a>
		<?php 
			include("php/forms/formCadUsuarios.php");
		}
		?>