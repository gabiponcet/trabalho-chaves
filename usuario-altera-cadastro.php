<?php require_once("cabecalho-usuario.php");
      require_once("banco-usuario.php");
      
$email = $_SESSION["usuario_logado"];

$usuario = buscaUsuario($conexao, $email);//armazena o resultado da função busca usuario na variável $usuario

?>

<h1>Alterando cadastro</h1>
<form action="altera-cadastro.php" method="post">
    <input type="hidden" name="id" value="<?= $usuario['id']?>" /><!--passa 'escondido'(hidden) o id do usuario selecionado -->
    <table class="table">

        <?php include("usuario-formulario-base.php"); ?>
        
        <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>