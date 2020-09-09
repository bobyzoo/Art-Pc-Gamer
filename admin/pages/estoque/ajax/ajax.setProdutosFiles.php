<?php
//diretório para salvar as imagens
$diretorio = "../img/images-products";

require_once "../../../../class/produtos.php";

$prod = new produtos();



//Verificar a existência do diretório para salvar as imagens e informa se o caminho é um diretório

if(!is_dir($diretorio)){
    echo "Pasta $diretorio nao existe";
}else{
    $arquivo = isset($_FILES['files']) ? $_FILES['files'] : FALSE;
    //loop para ler as imagens
    for ($controle = 0; $controle < count($arquivo['name']); $controle++){
        $destino = $diretorio."/".$arquivo['name'][$controle];
        if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
            $prod->insertFileProduct($destino);
            print_r("Upload realizado com sucesso<br>" );
        }else{
            echo "Erro ao realizar upload";
        }
    }
}
?>