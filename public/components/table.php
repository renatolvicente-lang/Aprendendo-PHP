<h4>Usuários Cadastrados</h4>

<table border="1" cellpadding="3">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th>Excluir</th>
    </tr>

    <?php
    
    $sqlTodosUsuarios = "SELECT * FROM usuarios";// cria a query que pega a tabela usuarios 

    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);// executa a query dentro do BD e armazena a tabela de usuarios dentro de resultados

    while($linha = $resultadoTodosUsuarios->fetch_assoc()){// Executa o codigo a seguir enquanto a quantidade de linhas de "$linha" for igual a quantidade de linhas da "$resultadoTodosUsuarios"

    // o fetch assoc percorre a tabela e retorna o valor de linhas dela

        echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                    <td> <a class'excluir-usuario' href='excluir.php?id=". $linha['id'] ."'> Excluir </td>
                </tr>
                <script src='../scripts/table.js'></script>
        ";// adiciona os dados captados da tabela do bd no html

    }
    
    ?>

    


</table>