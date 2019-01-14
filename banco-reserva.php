<?php
require_once("conecta.php");

function listaReservas($conexao){
    $reservas = array();
    $resultado = mysqli_query($conexao, "select * from reserva");
    while($reserva= mysqli_fetch_assoc($resultado)){
        array_push($reservas, $reserva);
        
    }
    return $reservas;
}

function removeReserva($conexao, $id){
    $query = "delete from reserva where id_reserva = '$id'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function insereReserva($conexao, $nome,$sala,  $telefone, $hr_retirada){
    $query = "insert into reserva (usuario, sala, telefone, hora_retirada) values ('{$nome}', '{$sala}', '{$telefone}', '{$hr_retirada}')";
    $resultadoInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

function devolveChave($conexao, $sala,$hr_devolucao){
        $query = "update reserva set  hora_devolucao = '{$hr_devolucao}' where sala = '{$sala}'";
        $resultado = mysqli_query($conexao, $query);
}


