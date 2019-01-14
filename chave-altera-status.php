<?php include("cabecalho-usuario.php");
    include("banco-chaves.php");
    include("banco-usuario.php");
    include("banco-reserva.php");
    include("conecta.php");
    
$email = $_SESSION["usuario_logado"];
$id = $_GET['id'];//passado como argumento para a função buscaChave e alteraChave
$chave = buscaChavereserva($conexao, $id);//armazena o resultado da função buscaChave na variável $chave(é um array com campos id, sala, situacao)
$sala = $chave['sala'];
$usuario = buscaUsuario($conexao, $email);
$nome = $usuario['nome'];
$telefone = $usuario['tel'];
   
?>

<form action="lista-chaves.php" method="post">
    <input type="hidden" name="id" value="<?=$chave['id']?>" /><!--passa 'escondido'(hidden) o id da chave selecionado -->
    <table class="table">

        <?php 
           if($chave['situacao'] == 1){
            date_default_timezone_set('America/Sao_Paulo');
            $hr_retirada=date('Y-m-d H:i:s');
            
            insereReserva($conexao, $nome,$sala, $telefone, $hr_retirada);
           }
           else{
            date_default_timezone_set('America/Sao_Paulo');
            $hr_devolucao=date('Y-m-d H:i:s');
            
            devolveChave($conexao, $sala, $hora_retirada ,$hr_devolucao);
            
           }
           $situacao = alteraSituacao($conexao,$id);//recebe o id da chave selecionada e busca o índice 'situacao'
           ?>
        
        <tr>
            <td><button class="btn btn-primary" type="submit">Reservar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php");
    header("Location:lista-chaves.php"); ?>