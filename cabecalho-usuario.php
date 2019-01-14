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
                <a href="index-usuario.php" class="navbar-brand">Chaves TSI</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="lista-chaves.php">Reservas/Devoluções</a></li>
                    <li><a href="usuario-altera-cadastro.php">Alterar cadastro</a></li>
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