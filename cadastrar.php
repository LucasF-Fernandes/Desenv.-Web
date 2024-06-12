<?php
require_once "conexao.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        if(empty($nome) || empty($email) || empty($senha)) {
            header("Location: cadastro.php?erro=campos_vazios");
            exit();
        } else {
            // Verifica se o email já está em uso
            $sql_verificar_email = "SELECT * FROM usuarios WHERE email = :email";
            $stmt_verificar_email = $pdo->prepare($sql_verificar_email);
            $stmt_verificar_email->bindParam(":email", $email);
            $stmt_verificar_email->execute();

            if($stmt_verificar_email->rowCount() > 0) {
                // Se o email já está em uso, redireciona de volta para o formulário com uma mensagem de erro
                header("Location: cadastro.php?erro=email_em_uso");
                exit();
            }

            // Criptografia da senha usando md5
            $senha_md5 = md5($senha);

            // Valor padrão para o campo 'sit' (por exemplo, '1' para ativo)
            $sit = 1;

            $sql = "INSERT INTO usuarios (nome, email, senha, sit) VALUES (:nome, :email, :senha, :sit)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":senha", $senha_md5);
            $stmt->bindParam(":sit", $sit, PDO::PARAM_INT); // Especifica explicitamente o tipo de dado como inteiro
            $stmt->execute();

            header("Location: login.php?sucesso=cadastro");
            exit();
        }
    } else {
        header("Location: cadastro.php?erro=campos_ausentes");
        exit();
    }
} else {
    header("Location: cadastro.php");
    exit();
}
?>
