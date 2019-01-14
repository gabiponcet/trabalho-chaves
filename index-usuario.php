<?php require_once("cabecalho-usuario.php");
      require_once("logica-usuario.php"); 
      ?>

<h1>Bem vindo!</h1>

<?php 

    if(usuarioEstaLogado()) { //verifica se o usuário está logado através de uma função
    ?>
    <p class="text-success">Você está logado como <?= usuarioLogado() ?>. <br/><a class="btn btn-danger" href="logout.php">Deslogar</a></p>
<?php 
   
    } ?>

<?php include("rodape.php"); ?>
