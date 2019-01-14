<?php require_once("cabecalho-index.php");
      require_once("logica-usuario.php"); 
      require_once("banco-usuario.php");
      ?>

<h1>Bem vindo!</h1>

<?php 

    if(usuarioEstaLogado()) { //verifica se o usuário está logado através de uma função
    ?>
    <p class="text-success">Você está logado como <?= usuarioLogado() ?>. <br/><a class="btn btn-danger" href="logout.php">Deslogar</a></p>
<?php 
        if(verificaTipo($conexao,$_POST['email']) == 2){//ver oq a função precisa para retornar o tipo
            header("Location:index-adm.php");
        }
        else{
            header("Location: index-usuario.php");
        }  
    } else { ?>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <table class="table">
            <tr>
                <td>Email</td>
                <td><input class="form-control" type="email" name="email"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input class="form-control" type="password" name="senha"></td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit">Login</button></td>
            </tr>
        </table>
    </form>
<?php } ?>

<?php include("rodape.php"); ?>
