<?php
include("cabecalho-index.php");
?>
    <h1>Cadastro de Usuário</h1>
    <form action="cadastro-usuario.php" method="post">
        <table class="table">
        <tr>
        <td>Nome:</td>
        <td><input class="form-control" type="text" name="nome"></td>
        </tr>

        <tr>
        <td>Email:</td>
        <td><input class="form-control" type="text" name="email"></td>
        </tr>

        <tr>
        <td>Telefone:</td>
        <td><input class="form-control" type="number" name="tel" placeholder="(53) 99999-9999"></td>
        </tr>
        
        <tr>
        <td>Tipo:</td>
        <td>
            <select class="form-control" name="tipo">
               <option value="0">Aluno</option>
               <option value="1">Professor</option>
               <option value="2">Administrador</option>
            </select>
        </td>
        </tr>
        
        <tr>
        <td>Turno:</td>
        <td>
            <select class="form-control" name="turno">
            <option value="0">Manhã</option>
            <option value="1">Tarde</option>
            <option value="2">Noite</option>
            </select>
        </td>
        </tr>
        
        <tr>
        <td>Senha:</td>
        <td><input class="form-control" type="password" name="senha"></td>
        </tr>

        <tr>
        <td><input type="submit" value="Cadastrar"class="btn btn-primary"/></td>
		<td><input type="reset" value="Apagar" class="btn btn-danger"/></td>
        </tr>
        </table>
    </form>
<?php include("rodape.php"); ?>