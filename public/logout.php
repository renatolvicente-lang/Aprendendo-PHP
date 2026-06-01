<?php
    //ativa quando o usuario aperta no botão de sair na pagina home.php
    session_start();//starta a sessão do usuario
    session_destroy();//"Destroi" a sessão do usuario
    header("Location: ../index.php");//leva para a página index.php
    exit();

?>