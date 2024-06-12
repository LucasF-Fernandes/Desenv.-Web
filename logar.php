<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require 'conexao.php';
    require 'Usuario.class.php';

    $u = new Usuario();
    
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    
    if ($u->login($email,$senha) == true){

        session_start();

        $_SESSION['iduser'] = $u->getIdUsuario($email);

        header('Location: index.php');
        exit;
        
    }else{
        header("Location: login.php");
        exit;
    }

}else{

    header("Location: login.php");
    exit;
    
}
?>