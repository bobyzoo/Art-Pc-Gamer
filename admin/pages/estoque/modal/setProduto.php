<?php
require_once "../../../../class/produtos.php";

$prod = new produtos();
?>
<form class="user" enctype="multipart/form-data" method="POST" id="frmProdutos" action="">
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="exampleFormControlSelect1">Categoria do produto</label>
            <select class="form-control" id="exampleFormControlSelect1" style="height: 50px" name="categoria">
                <option value="" selected="selected">...</option>
                <?php foreach ($prod->selectCategorias() as $categoria) {
                    ?>
                    <option value="<?= $categoria->id ?>"><?= $categoria->nome ?></option>
                    <?php
                } ?>
            </select>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0 ">
            <label for="valor">Valor do produto</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">R$</div>
                </div>
                <input type="text"  class="form-control form-control-user" id="valor" name="valor" placeholder="0,00">
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputEmail"  name="nome" placeholder="Nome do produto">
    </div>
    <div class="form-group ">
        <label for="exampleFormControlTextarea1">Detalhes do produto</label>
        <textarea class="form-control  form-control-user" id="exampleFormControlTextarea1" name="detalhes" rows="3"></textarea>
    </div>

    <div class="form-group ">
        <input type="file"  class="form-control-file" name="files[]" id="files"  multiple="multiple"/><br><br>
    </div>


</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"
        integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA=="
        crossorigin="anonymous"></script>

<script>
    $("#valor").maskMoney({
        thousands: '.',
        decimal: ',',
        allowZero: true
    });
</script>