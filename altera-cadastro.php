<?php require_once("cabecalho-usuario.php");
      require_once("banco-usuario.php");
       ?>
      
<?php

$id = $_POST["id"];//precisa ser passado pelo formulário usuario-altera-formulario.php
$nome = $_POST["nome"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$tipo = $_POST["tipo"];
$turno = $_POST["turno"];
$senha = $_POST["senha"];

if(alteraUsuario($conexao, $id, $nome,$email,$senha, $tipo, $turno,$tel )) { //id deve ser passado como argumento{ ?>
    <p class="text-success">Cadastro <?= $nome; ?> alterado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">Cadastro<?= $nome; ?> não foi alterado: <?= $msg ?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
