<?php 
    include("cabecalho-usuario.php");
    include("banco-chaves.php");
    include("banco-usuario.php");
    include("logica-usuario.php");
    verificaUsuario();
    ?>

<table class="table table-striped table-bordered">
        <tr>
            <th>Sala</th>
            <th>Situação</th>
            <th>Reservar</th>
        </tr>
        <?php //php que faz a busca
        $chaves = listaChaves($conexao);//busca a lista de chaves no banco e retorna como arrays
        foreach($chaves as $chave) ://para cada um dos produtos eu dou nome da variável de produto e executa o codigo abaixo
            if($chave['situacao'] == false){//compara tipos iguais usando ===
          //  if(!$chave['situacao']) - outra forma de escrever o false
                $chave['situacao'] = 'INDISPONÍVEL';
            ?>
            <tr>
            <td><?= $chave['sala'] ?></td>
            <td><p class="label label-warning"><?= $chave['situacao'] ?></p></td>
            <td><a class="btn btn-danger" href="chave-altera-status.php?id=<?=$chave['id_chave']?>">Devolver chave</a></td>
            </tr>
        <?php
            }else{
                $chave['situacao'] = 'DISPONÍVEL';
                ?>
                <td><?= $chave['sala'] ?></td>
                <td><p class="label label-success"><?= $chave['situacao'] ?></p></td>
                <td><a class="btn btn-success" href="chave-altera-status.php?id=<?=$chave['id_chave']?>">Reservar chave</a></td>
                </tr>
            <?php
            }
    ?>
       <?php
        endforeach //php que fecha o for (ou: colocar {} como em C)
    ?>
</table>

<?php include("rodape.php"); ?>