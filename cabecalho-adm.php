<?php error_reporting(E_ALL ^ E_NOTICE);//em todos que possuem CABEÇALHO, reportará tds os erros, exceto os os de notice
        require_once("mostra-alerta.php");//inclui no cabeçalho, pois usarei esta função em tds as páginas que necessitam de cabeçalho
 ?>
<html>
<head>
    <title>Chaves TSI</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/loja.css" rel="stylesheet" />
    <link href="funcoes.js"/>
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index-adm.php" class="navbar-brand">Chaves TSI</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="chave.php">Cadastrar Chaves</a></li>
                    <li><a href="usuario-altera-cadastroadm.php">Alterar cadastro</a></li>
                    <li><a href="lista-chavesadm.php">Chaves</a></li>
                    <li><a href="lista-reservas.php">Reservas</a></li>
                    <li><a href="lista-usuarios.php">Usuários</a></li>
                </ul>
            </div>
        </div> 
    </div>

    <div class="container">

        <div class="principal">
        <?php
        mostraAlerta("success");
        mostraAlerta("danger");
        ?>
