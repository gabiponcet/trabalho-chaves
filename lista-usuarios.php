<?php
    include("cabecalho-adm.php");
    include("banco-chaves.php");
    include("banco-usuario.php");
    include("logica-usuario.php");
    verificaUsuario();
?>
<table class="table table-striped table-bordered"> 
<tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Tipo</th>
        <th>Turno</th>
        <th>Telefone</th>
        <th>Remover</th>
    </tr>
<?php
        $usuarios = listaUsuarios($conexao);
        foreach($usuarios as $usuario) :
            if($usuario['tipo'] == 0){
                $usuario['tipo'] = 'Aluno';
            }
            if($usuario['tipo'] == 1){
                $usuario['tipo'] = 'Professor';
            }
            if($usuario['tipo'] == 2){
                $usuario['tipo'] = 'Administrador';
            }
            if($usuario['turno'] == 0){
                $usuario['turno'] = 'Manhã';
            }
            if($usuario['turno'] == 1){
                $usuario['turno'] = 'Tarde';
            }
            if($usuario['turno'] == 2){
                $usuario['turno'] = 'Noite';
            }
    ?>
    <tr>
        <td><?= $usuario['nome'] ?></td>
        <td><?= $usuario['email'] ?></td>
        <td><?= $usuario['tipo'] ?></td>
        <td><?= $usuario['turno'] ?></td>
        <td><?= $usuario['tel'] ?></td>
        
        <td>
            <form action="remove-usuario.php" method="post">
                <input type="hidden" name="id" value="<?=$usuario['id']?>" />
                <button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
            </form>
        </td>
    </tr>
    <?php
        endforeach //php que fecha o for (ou: colocar {} como em C)
    ?>
</table>

<?php include("rodape.php"); ?>