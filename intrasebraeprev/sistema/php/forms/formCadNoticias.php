<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	
<div class="table-responsive">
	
    <table class="table">

        <form method="post" action="php/cadNoticias.php" enctype="multipart/form-data">

        	<tr>

            	<td colspan="2">

                	<h3> Novo Registro </h3>

                </td>

            </tr>

        	<tr>

            	<td> Título </td>

                <td> <input type="text" name="titulo" /></td>

            </tr>

            <tr>

            	<td colspan="2"> Noticia </td>

            </tr>

                <td colspan="2"> <textarea name="noticia"></textarea></td>

            </tr>

            <tr>

            	<td> Fonte </td>

                <td> <input type="text" name="fonte" /></td>

            </tr>

            <tr>

            	<td> Foto </td>

                <td> <input type="file" name="arq" /></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Cadastrar" name="cad" /></td>

            </tr>

        </form>

        </table>

</div>