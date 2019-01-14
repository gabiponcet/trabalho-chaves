<?php
session_start();//inicia a sessao. É um mecanismo usado p evitar a exposição de dados através do uso de cookies (se a sessão já existe, usa a sessão/se ela não existe: cria a sessão)

function usuarioEstaLogado() {
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() { // verifica se o usuario esta logado, SE ESTIVER, 'SETA' O GET
    if(!usuarioLogado()) {//veririfa se o retorno da função usuarioLogado
     $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
     header("Location: index.php");
     die();
  }
}

function usuarioLogado() {
    return $_SESSION["usuario_logado"];
}

function logaUsuario($email) {//FUNÇÃO QUE ESCREVE O USUÁRIO LOGADO: recebe o email 
    $_SESSION["usuario_logado"] = $email;//email é passado como argumento na página de login por array associativo
}

function logout() {
    //unset($_SESSION["usuario_logado"]);// 'desseta' a variável usuario_logado OU
    session_destroy();
    session_start();//para mostrar a msg de deslogado, precisamos iniciar a sessão novamente
}
