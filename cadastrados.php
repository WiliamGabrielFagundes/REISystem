<!-- Autor: Wiliam G.Fagundes -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrados</title>
    <link rel="stylesheet" href="stylecad.css">
</head>
<body>
    <div class="R">REISystem</div>
    <a class="voltar" href="inicio.html">←</a>
</body>
</html>
<?php
include("codigo.php");
// Lembre-se de configurar suas credenciais corretamente
$conexao = new mysqli("localhost", "root", "", "rei");

// Verifica a conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

// Query para obter todos os usuários do banco de dados
$query = "SELECT id, cnpj, nome FROM usuarios";
$resultado = $conexao->query($query);

// Verifica se a consulta foi bem-sucedida
if ($resultado) {
    // Exibe os dados de todos os usuários
    if ($resultado->num_rows > 0) {
        echo "<h1>Lista de clientes</h1>";
        while ($usuario = $resultado->fetch_assoc()) {
            /* echo "<p><strong>ID:</strong> " . $usuario['id'] . "</p>"; */
            echo "<p><strong>CNPJ:</strong> " . $usuario['cnpj'] . "</p>";
            echo "<p><strong>Nome:</strong> " . $usuario['nome'] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "<p><strong>Não há usuários cadastrados.</strong>"; 
    }

    // Libera o resultado da consulta
    $resultado->free();
} else {
    echo "Erro na consulta: " . $conexao->error;
}

// Fecha a conexão com o banco de dados
$conexao->close();
?>
