<?php
class Usuario{

    public function login ($email,$senha){
        global $pdo;

        $sql = "SELECT * FROM  usuarios WHERE email = :email AND senha = :senha";
        $sql = $pdo -> prepare($sql);
        $sql -> bindValue(":email", $email);
        $sql -> bindValue(":senha", $senha);
        $sql -> execute();

        if($sql->rowCount()>0){
            $dado = $sql->fetch();

            $_SESSION['idusuario'] = $dado['iduser'];

            return true;
        }else{
            return false;
        }
        
    }

    public function logged($id){
        global $pdo;

        $array = array();

        $sql = "SELECT * FROM  usuarios WHERE iduser = :iduser";
        $sql = $pdo -> prepare($sql);
        $sql -> bindValue(":iduser", $id);
        $sql -> execute();

        if($sql->rowCount()>0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getIdUsuario($email){
        global $pdo;

        $sql = "SELECT iduser FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":email", $email);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['idusuario'];
    }
}

?>