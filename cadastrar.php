<!-- Autor: Wiliam G.Fagundes -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <div class="login-form">
    <div class="R">REISystem</div>
        <a class="voltar" href="inicio.html">←</a>
        <form action="http://localhost/wiliam/cadastrados.php" method="post">
            <div class="field">
                <input type="text" id="cnpj" name="cnpj" placeholder="CNPJ:" required>
            </div>

            <div class="field">
                <input type="text" id="nome" name="nome" placeholder="Nome:" required>
            </div>
            <br>
            <button class="botao" type="submit">Cadastrar</button>
        </form> 
    </div> 
</body>
</html>
