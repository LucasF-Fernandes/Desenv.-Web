

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro - BeckDonald's</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="header-container">
            <div class="header-left">
                <h1>BD - Floricultura</h1>
                <p>Sua Loja de Flores</p>
            </div>
            <div class="header-right">
                <div class="condicao-tempo" id="condicao-tempo">
                    <p id="descricao-tempo"></p>
                    <p><span id="temperatura"></span>°C</p>
                    <p>Umidade: <span id="umidade"></span>%</p>
                </div>
                <div class="dicas-plantio" id="dicas-plantio">
                    <p id="dicas-texto"></p>
                </div>
            </div>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="produtos.php">Produtos</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>

    <main>
        <h2>Cadastro</h2>
        <form action="cadastrar.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required><br><br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <input type="submit" value="Cadastrar">
        </form>
        <a href="login.php">Já possui cadastro? Clique aqui para fazer login.</a>
    </main>

    <footer>
        <p>Rodapé da loja &copy; 2024 BeckDonald's - Loja de Flores</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>

