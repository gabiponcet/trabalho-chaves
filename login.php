<?php 
     include("banco-usuario.php");
      include("logica-usuario.php");
//buscar usuario atraves de email e senha
$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

if($usuario == null) {
    $_SESSION["danger"] = "Usuário ou senha inválido.";
    header("Location: index.php");
} else {
    $_SESSION["success"] = "Usuário logado com sucesso.";
    logaUsuario($usuario["email"]);
    $tipo = verificaTipo($conexao,$usuario["email"]);
   if($tipo["tipo"] == 2){
        header("Location:index-adm.php");
    }
    else{
        header("Location: index-usuario.php");
    }
}
die();
