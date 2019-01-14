<?php
session_start();//pq se usa a sessão, então devemos garantir que esta será iniciada

function mostraAlerta($tipo) {//cria a função que recebe um tipo da página de login para definir se houve success ou danger 
    if(isset($_SESSION[$tipo])){//VERIFICA SE EXISTE UMA MSG DESTE TIPO NA SESSÃO
    ?>
        <p class="alert-<?= $tipo ?>"><?= $_SESSION[$tipo]?></p>
<?php
        unset($_SESSION[$tipo]);
    }
}
