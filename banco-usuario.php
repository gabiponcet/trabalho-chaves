<?php
require_once("conecta.php");
function buscaUsuario($conexao, $email) {
    $usuario = array();
    $resultado = mysqli_query($conexao, "select * from usuarios where email = '{$email}'");
    $usuario = mysqli_fetch_assoc($resultado);//Returns an associative array that corresponds to the fetched row or NULL if there are no more rows.
    
    return $usuario;
}

function listaUsuarios($conexao){
    $usuarios = array();
    $resultado = mysqli_query($conexao, "select * from usuarios");
    while($usuario = mysqli_fetch_assoc($resultado)){
        array_push($usuarios, $usuario);
        
    }
    return $usuarios;
}

function verificaAdm($conexao){
    $query = "select COUNT(*) from usuarios where tipo = 2";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function verificaTipo($conexao, $email){//corrigir função
    $query = "select * from usuarios where email = '{$email}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario_tipo = mysqli_fetch_assoc($resultado);
    return $usuario_tipo;
}

function removeUsuario($conexao, $id){
    $query = "delete from usuarios where id = '$id'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function alteraUsuario($conexao, $id, $nome,$email,$senha, $tipo, $turno,$tel ) {//id do usuario deve ser como argumento par identificar qual será alterado 
    $query = "update usuarios set nome = '{$nome}', email = '{$email}', senha = '{$senha}',
        tipo= {$tipo}, turno = {$turno},  tel = '{$tel}' where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function insereUsuario($conexao, $nome,$email, $tel,$tipo, $senha ) {
    $query = "insert into usuarios (nome,email,tel,tipo,senha) values ('{$nome}','{$email}',{$tel}, '{$tipo}','{$senha}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}


