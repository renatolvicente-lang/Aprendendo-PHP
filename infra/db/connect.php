<?php

    $host = "localhost";//Variavel que recebe o valor de Host
    $user = "root";//Variavel que recebe o valor de root
    $pass = "root";//Variavel que recebe o valor de root
    $db = "sistema_simples_m1";//Variavel que recebe o valor de sistema_simples_m1

    $conn = new mysqli($host,$user,$pass,$db);//cria uma conexão com o BD usando os dados das variaveis anteriores.

    if($conn->connect_error){//verifica se ouve erro de conexão
        die("Erro na conexão!");//caso de erro na conexão
    }else{
        echo "<script>console.log('Banco conectado com sucesso!')</script>";//caso de certo a conexão
    };

?>