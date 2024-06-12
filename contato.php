<?php
require "verifica.php";

if (isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])):  ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato - BeckDonald's</title>
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
        <h2>Contato</h2>
        <p>Entre em contato conosco:</p>
        <ul>
            <li><a href="https://www.instagram.com/beckdonalds_floricultura/" target="_blank">Instagram</a></li>
            <li><a href="https://api.whatsapp.com/send?phone=5511999999999" target="_blank">WhatsApp</a></li>
        </ul>
    </main>

    <footer>
        <p>Rodapé da loja &copy; 2024 BeckDonald's - Loja de Flores</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>
<?php endif; ?>