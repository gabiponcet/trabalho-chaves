<?php
    include("cabecalho-adm.php");
    include("banco-reserva.php");
    include("logica-usuario.php");
    verificaUsuario();
?>
<table class="table table-striped table-bordered"> 
<tr>
        <th>Sala</th>
        <th>Usuário</th>
        <th>Telefone</th>
        <th>Data/Hora de retirada</th>
        <th>Data/Hora de devolução</th>
        <th>Remover histórico</th>
    </tr>
<?php
        $reservas = listaReservas($conexao);
        foreach($reservas as $reserva) :
        ?>
    <tr>
        <td><?= $reserva['sala'] ?></td>
        <td><?= $reserva['usuario'] ?></td>
        <td><?= $reserva['telefone'] ?></td>
        <td><?= $reserva['hora_retirada']?></td>
        <td><?= $reserva['hora_devolucao'] ?></td>
        
        <td>
            <form action="remove-reserva.php" method="post">
                <input type="hidden" name="id_reserva" value="<?=$reserva['id_reserva']?>" />
                <button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
            </form>
        </td>
    </tr>
    <?php
        endforeach //php que fecha o for (ou: colocar {} como em C)
    ?>
</table>

<?php include("rodape.php"); ?>