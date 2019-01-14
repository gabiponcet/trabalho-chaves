<?php
include("cabecalho-adm.php");
include("conecta.php");
include("banco-chaves.php");


$id_chave = $_POST['id_chave'];
$sala = $_POST['sala'];

if(insereChave($conexao, $id_chave, $sala)) { ?>
    <p class="text-success">
        Chave <?= $id_chave; ?>, <?= $sala; ?> cadastrada com sucesso!
    </p>
<?php } else { 
    $msg = mysqli_error($conexao);?>
    <p class="text-danger">
        Chave <?= $sala; ?> não cadastrada.
    </p>
<?php } ?>

<?php include("rodape.php"); ?>