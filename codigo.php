<!-- Autor: Wiliam G.Fagundes -->
<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $cnpj = $_POST["cnpj"];
    $nome = $_POST["nome"];

    // Faça o que precisar com os dados, como salvar em um banco de dados
    // Por exemplo, você pode usar MySQLi ou PDO para interagir com um banco de dados
    // Aqui está um exemplo usando MySQLi (lembre-se de configurar suas credenciais corretamente)
    $conexao = new mysqli("localhost", "root", "", "rei");

    // Verifica a conexão
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Query para inserir dados no banco de dados
    $query = "INSERT INTO usuarios (cnpj, nome) VALUES ('$cnpj', '$nome')";

    if ($conexao->query($query) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
}
?>
