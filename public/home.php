<?php
session_start();// inicia a sessão do usuário
if(!isset($_SESSION["usuario"])){// verifica se já ouve um login verificando se há uma sessão com nome adicionado na variavel usuario
    header("Location: ../index.php");//volta para a página index.php
    exit();
}

include("../infra/db/connect.php");//inclue um componente que connecta com o BD

if($_SERVER["REQUEST_METHOD"] == "POST"){//verifica se o metodo de request é "POST"
    $novoUsuario = $_POST['usuario'];// armazena os dados inseridos no input de name "usuario" da tabela de cadastro
    $novaSenha = $_POST['senha'];// armazena os dados inseridos no input de name "senha" da tabela de cadastro

    $sql = "INSERT INTO usuarios (usuario,senha) 
    VALUES ('$novoUsuario','$novaSenha')";  // armazena a query que insere novos valores na tabela do BD

    if($conn->query($sql) === TRUE){//verifica se a query foi criada
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";// mensagem de sucesso
    }else{
        echo "<script> alert('Erro ao cadastrar')</script>";//mensagem de erro
    }

};

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <!-- h3 serve para exibir um titulo com uma mensagem e exibir o nome inserido anteriormente -->
    <h3>Bem-Vindo! <?php echo $_SESSION["usuario"]; ?></h3>
    <!-- Botão que executa a função da página logout.php -->
    <a href="logout.php"> Sair</a>

    <hr>
    <h4>Cadastro de Novo Usuário.</h4>
    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        <?php
        
            if(isset($erro)){
                echo $erro;// insere mensagem de erro 
            };
        
        ?>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <hr>
    <?php
    
    include("components/table.php")

    ?>



</body>
</html>