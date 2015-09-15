<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

	if ($_SESSION['usuario'] == $consultaC['usuario']) {

		echo '

	<table>

    	<td>

        	<a href="?forum='.base64_encode('true').'&topic='.$_GET['topic'].'&post='.$consultaC['id'].'">

            	<img src="../../imagens/ico_edit.png" alt="Editar Post">

            </a>

        </td>

        <td>

            <a href="?forum='.base64_encode('true').'&topic='.$_GET['topic'].'&post='.$consultaC['id'].'" class="btnDelComents" id="'.$consultaC['id'].'"><img src="../../imagens/ico_delete.png" alt="Exluir Post"></a>

        </td>

   </table>

   			';

	}	

?>