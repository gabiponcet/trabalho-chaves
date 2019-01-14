<?php 
include("cabecalho-index.php");
include("conecta.php");
include("banco-chaves.php");
include("banco-usuario.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $tipo = $_POST["tipo"];
    $turno = $_POST["turno"];
    $senha = $_POST["senha"];

    //função verifica se já existe um adm para a página e retorna um valor inteiro = 1 se existir 
    if(verificaAdm($conexao)==1 && $tipo == 2){
        $msg = mysqli_error($conexao);?>
        <p class="text-danger">
            Usuário <?= $nome; ?> não pode ser cadastrado como ADMINISTRADOR.
        </p>
    <?php
    }

    else{
        if(insereUsuario($conexao, $nome, $email,$tel,$tipo,$senha)) { ?>
            <p class="text-success">
                Usuário <?= $nome; ?>, <?= $email; ?> cadastrado com sucesso!
            </p>
        <?php } else { 
            $msg = mysqli_error($conexao);?>
            <p class="text-danger">
                Usuário <?= $nome; ?> não cadastrado.
            </p>
        <?php } 
    } ?>

<?php include("rodape.php"); ?>