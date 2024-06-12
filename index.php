<?php
require "verifica.php";

if (isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])):  ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>BeckDonald's - Loja de Flores</title>
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
        <div>
            <h2>Bem-vindo à BeckDonald's - Loja de Flores</h2>
            <p>Uma floricultura especializada em oferecer as mais belas flores para ocasiões especiais.</p>
            <p>Visite nossa loja física para ver nossa ampla seleção de flores frescas!</p>
        </div>

        <div class="produto" title="Produto em Destaque">
            <h3>Produto em Destaque</h3>
            <img src="imagem\png-transparent-green-large-leaf-plant-potted-green-leaves-potted-potted-flowers-green-plants-removebg-preview.png" alt="Braba do Jaca" style="margin: 20px;">
            <p>A braba do Jaca, ideal para presentear alguém especial.</p>
            <p><strong>Preço (5g):</strong> R$ 20,00</p>
        </div>

        <p>Visite nossa Loja!</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18685.090974172846!2d-43.255673867604315!3d-22.89194442519238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997c25fb8ff0c3%3A0x74dad66c9c083387!2sBeckDonald's%20-%20Loja%20de%20Flores!5e0!3m2!1spt-BR!2sbr!4v1713801946857!5m2!1spt-BR!2sbr"
            width="600" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </main>

    <footer>
        <p>Rodapé da loja &copy; 2024 BeckDonald's - Loja de Flores</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>
<?php endif; ?>