<?php

require_once "conexao.php";

class produtos
{

    public function selectByCat($post)
    {

        $sql = "SELECT * FROM produtos WHERE id_cat_produto = :id";
        $stmt = Conexao::getInstance()->prepare($sql);

        $stmt->bindParam(":id", $post->id);
        $produtos = [];
        if ($stmt->execute()) {
            while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
                array_push($produtos, $linha);
            }
            return $produtos;

        } else {
            return "0;Problema de conexão!";
        }
    }

    public function select()
    {

        $sql = "SELECT * FROM produtos p LEFT JOIN categoria_produto c ON c.id = p.id_cat_produto";
        $stmt = Conexao::getInstance()->prepare($sql);

        $produtos = [];
        if ($stmt->execute()) {
            while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
                array_push($produtos, $linha);
            }
            return $produtos;

        } else {
            return "0;Problema de conexão!";
        }
    }

    public function selectCategorias()
    {

        $sql = "SELECT * FROM categoria_produto order by nome ASC ";
        $stmt = Conexao::getInstance()->prepare($sql);

        $produtos = [];
        if ($stmt->execute()) {
            while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
                array_push($produtos, $linha);
            }
            return $produtos;

        } else {
            return "0;Problema de conexão!";
        }
    }
    public function selectTags()
    {

        $sql = "SELECT * FROM tags order by nome ASC ";
        $stmt = Conexao::getInstance()->prepare($sql);

        $produtos = [];
        if ($stmt->execute()) {
            while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
                array_push($produtos, $linha);
            }
            return $produtos;

        } else {
            return "0;Problema de conexão!";
        }
    }


    public function insertData($post)
    {


        $post->valor = str_replace('.', '', $post->valor);
        $post->valor = str_replace(',', '.', $post->valor);



        try {
            $sql = "INSERT INTO produtos SET id_cat_produto = :id_cat, desc_produto = :desc_produto, valor = :valor, nome =  :nome";
            $stmt = Conexao::getInstance()->prepare($sql);


            $stmt->execute(array(
                ':id_cat' => $post->categoria,
                ':desc_produto' => $post->detalhes,
                ':valor' => $post->valor,
                ':nome' => $post->nome,
            ));
            echo $stmt->rowCount();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

        }
    }

    public function insertCategoria($post)
    {


        try {
            $sql = "INSERT INTO categoria_produto SET nome = :nome";
            $stmt = Conexao::getInstance()->prepare($sql);


            $stmt->execute(array(
                ':nome' => $post->nome,
            ));
            echo $stmt->rowCount();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

        }
    }

    public function insertTag($post)
    {


        try {
            $sql = "INSERT INTO tags SET nome = :nome";
            $stmt = Conexao::getInstance()->prepare($sql);

            $stmt->execute(array(
                ':nome' => $post->nome,
            ));
            echo $stmt->rowCount();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

        }
    }


    public function insertFileProduct($destino)
    {

        try {
            $sql = "INSERT INTO rel_imagem_produto SET url = :url, id_produto = (select MAX(id) from produtos limit 1) ";
            $stmt = Conexao::getInstance()->prepare($sql);
            $stmt->execute(array(
                ':url' => $destino,
            ));
            echo $stmt->rowCount();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

        }
    }



}