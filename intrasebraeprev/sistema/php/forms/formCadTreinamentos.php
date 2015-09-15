<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <table class="formUpload">

        <form method="post" action="php/cadTreinamentos.php" enctype="multipart/form-data">

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

            	<td>Categoria</td>

                <td><input type="text" maxlength="100" name="cat" /></td>

            </tr>

            <tr>

            	<td colspan="2"> Descrição </td>

            </tr>

            <tr>

                <td colspan="2"> <textarea name="desc"></textarea></td>

            </tr>

            <tr>

            	<td> Arquivo </td>

                <td> <input type="file" name="arq" /></td>

            </tr>

            <tr>

            	<td> Link </td>

                <td> <input type="text" name="link" /></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Cadastrar" name="cad" /></td>

            </tr>

        </form>

        </table>