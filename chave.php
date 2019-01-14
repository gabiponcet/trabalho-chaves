<?php
include("cabecalho-adm.php");
include("conecta.php");
include("logica-usuario.php");
verificaUsuario();
?>
	<div>
		<h1>Cadastrar Chaves</h1>
		<form action="cadastro-chave.php" method="post">
			<table class=table>
				<tr>
				<td>Número da Chave:</td>
				<td><input class="form-control" type="number" name="id_chave"/></td>
				</tr>

				<tr>
				<td>Nome da sala:</td>
				<td><input class="form-control" type="text" name="sala"/></td>
				</tr>

				<tr>
				<td><input type="submit" value="Cadastrar"class="btn btn-primary"/></td>
				<td><input type="reset" value="Apagar" class="btn btn-danger"/></td>
				</tr>

			</table>
		</form>
	</div>
<?php include("rodape.php");?>