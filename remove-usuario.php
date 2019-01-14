<?php require_once("cabecalho-adm.php");
 require_once("banco-usuario.php");
 require_once("logica-usuario.php");

 $id = $_POST['id'];
 removeUsuario($conexao, $id);
 $_SESSION['success'] = "Usuário removido.";
 header("Location: lista-usuarios.php");
 die();
 ?>