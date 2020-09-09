<?php
require_once "conexao.php";

class user
{

    public function findUser($usuario,$senha)
    {

        $sql = "SELECT * FROM usuarios WHERE usuario = :user AND senha = :senha";
        $stmt = Conexao::getInstance()->prepare($sql);
        $stmt->bindParam(":user", $usuario);
        $stmt->bindParam(":senha", $senha);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

}