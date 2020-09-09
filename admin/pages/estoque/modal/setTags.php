<?php
require_once "../../../../class/produtos.php";

$prod = new produtos();
?>
<form class="user" enctype="multipart/form-data" method="POST" id="frmTag" action="">
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Nome da Tag</label>
        <input type="text" class="form-control form-control-user" id="exampleInputEmail"  name="nome">
    </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"
        integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA=="
        crossorigin="anonymous"></script>
