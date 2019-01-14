<?php require_once("cabecalho-adm.php");
 require_once("banco-chaves.php");
 require_once("logica-usuario.php");

 $id = $_POST['id_chave'];
 removeChave($conexao, $id);
 $_SESSION['success'] = "Chave removida.";
 header("Location: lista-chavesadm.php");
 die();
 ?>