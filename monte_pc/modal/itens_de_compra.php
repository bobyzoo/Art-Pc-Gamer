<?php
require_once "../../class/produtos.php";
$produtos = new Produtos();

$post = new stdClass;
foreach ($_POST as $key => $value) {
    $post->$key = $value;
}
$listprodutos = $produtos->selectByCat($post);
?>

<ul class="list-group">
    <?php foreach ($listprodutos as $produto) {?>
        <li class="list-group-item <?=$post->idatual == $produto->id ? 'item-check' :  '' ?>" id="item-<?=$produto->id?>">
            <div class="row ">
                <div class="col-1 ml-0 text-center py-3">
                    <div onclick="checkButton(<?=$produto->id?>)">

                        <i class=" far  <?=$post->idatual == $produto->id ? 'fa-check-circle' :  'fa-circle' ?> text-success " id="check-<?=$produto->id?>" style="font-size: 30px"></i>
                    </div>
                </div>
                <div class="col-1 ml-0 text-center py-3"><img src="/Art-Pc-Gamer/img/icons/gpu.png" alt=""></div>
                <div class="col-1 ml-0 text-center py-4">1</div>
                <div class="col-6 text-justify">
                    <?=$produto->desc_produto?>
                </div>
                <div class="col-2 text-center py-3">R$ <?=$produto->valor?><br>
                    no boleto (13% OFF)
                </div>
            </div>
        </li>
    <?php } ?>
</ul>
