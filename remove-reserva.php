<?php require_once("cabecalho-adm.php");
 require_once("banco-reserva.php");

 $id = $_POST['id_reserva'];
 removeReserva($conexao, $id);
 $_SESSION['success'] = "Reserva removida.";
 header("Location: lista-reservas.php");
 die();
 ?>