<?php
include("conecta.php");
function insereChave($conexao, $id_chave,$sala) {
    $query = "insert into chaves (id_chave,sala) values ({$id_chave},'{$sala}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

function listaChaves($conexao){
    $chaves = array();
    $resultado = mysqli_query($conexao, "select*from chaves");
    while($chave = mysqli_fetch_assoc($resultado)){
        array_push($chaves, $chave);//coloca cada chave em um array para enviar para a tabela com a lista de chaves
        
    }
    return $chaves;
}

function buscaChave($conexao, $id){// esta função pega o id da página chave-altera-status.php e armazena como um array em $resultado
    $resultado = mysqli_query($conexao, "select situacao from chaves where id = $id");
    return $resultado;//é enviado para a variável $chave na pagina chave-altera-status 
}


function buscaChavereserva($conexao, $id) {
    $chave = array();
    $resultado = mysqli_query($conexao, "select * from chaves where id_chave = '{$id}'");
    $chave = mysqli_fetch_assoc($resultado);//Returns an associative array that corresponds to the fetched row or NULL if there are no more rows.
    
    return $chave;
}

function alteraSituacao($conexao, $id){//altera a situacao da chave no banco de dados, retornando true ou false
    $situacao = mysqli_query($conexao, "select situacao from chaves where id_chave = $id");
    $situacao = mysqli_fetch_array($situacao);
    if($situacao['situacao'] == false){
        $query = mysqli_query($conexao, "update chaves set situacao = true where id_chave = $id");
        return $query['situacao'];
    }else{
        $query = mysqli_query($conexao, "update chaves set situacao = false where id_chave = $id");
        return $query['situacao'];
    }
}

function removeChave($conexao, $id){
    $query = "delete from chaves where id_chave = $id";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

?>
