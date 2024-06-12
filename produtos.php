<?php
require "verifica.php";

if (isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])):  ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos - BeckDonald's</title>
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
        <h2>Nossos Produtos</h2>
        <div class="produto-container">
            <div class="produto" onclick="abrirDetalhes('rosa')">
                <h3>Braba do Jaca</h3>
                <img src="imagem/png-transparent-green-large-leaf-plant-potted-green-leaves-potted-potted-flowers-green-plants-removebg-preview.png" alt="A Braba" style="margin: 20px">
                <p>Braba do Jaca, ideal para presentear alguém especial.</p>
                <p><strong>Preço(5g)</strong> R$ 20,00</p>
            </div>
            <div class="produto" onclick="abrirDetalhes('margarida')">
                <h3>Flor Roxa</h3>
                <img src="imagem\png-transparent-common-lilac-vase-desktop-flower-purple-purple-violet-branch-removebg-preview.png" alt="Flor Roxa" style="margin: 20px">
                <p>Flor roxa e delicada, perfeita para alegrar o ambiente.</p>
                <p><strong>Preço(1g):</strong> R$ 45,00</p>
            </div>
            <div class="produto" onclick="abrirDetalhes('orquidea')">
                <h3>Comlômbia</h3>
                <img src="imagem\png-transparent-vase-yellow-flower-floral-design-red-edge-yellow-flower-bouquet-flower-arranging-3d-computer-graphics-orange-removebg-preview.png" alt="Orquídea Rosa" style="margin: 20px">
                <p>Flor elegante, ótima para decorar a casa.</p>
                <p><strong>Preço(1g):</strong> R$ 25,00</p>
            </div>
            <div class="produto" onclick="abrirDetalhes('girassol')">
                <h3>Híbrida</h3>
                <img src="imagem\png-transparent-floral-design-cut-flowers-vase-vase-blue-flower-arranging-artificial-flower-removebg-preview.png" alt="Girassol Amarelo" style="margin: 20px">
                <p>Arranjo de flores, simboliza alegria e positividade.</p>
                <p><strong>Preço(1g):</strong> R$ 18,00</p>
            </div>
            <div class="produto" onclick="abrirDetalhes('violeta')">
                <h3>White Widow</h3>
                <img src="imagem\png-transparent-flower-vase-vase-flower-arranging-white-photography-thumbnail-removebg-preview.png" alt="Violeta Roxa" style="margin: 20px">
                <p>Flor encantadora, ideal para pequenos vasos.</p>
                <p><strong>Preço(1g):</strong> R$ 37,00</p>
            </div>
        </div>
    </main>

    <footer>
        <p>Rodapé da loja &copy; 2024 BeckDonald's - Loja de Flores</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>
<?php endif; ?>