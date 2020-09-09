<?php require_once "../header.php" ?>


<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Categoria de produtos</h1>
</div>

<div class="row my-5">
    <div class="col-12">
        <a class="btn btn-info btn-icon-split icone-item" data-toggle="modal" data-target="#exampleModal" onclick="openModal()">
                    <span class="icon text-white-50 text-light"  >
                      <i class="fas fa-plus"></i>
                    </span>
            <span class="text text-light">Inserir nova categoria</span>
        </a>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-lg modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title"> Set Products</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="confirmAdd()">Adicionar</button>
            </div>
        </div>
    </div>
</div>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"></table>
        </div>
    </div>
</div>


<!-- Page level custom scripts -->

<!-- Page level custom scripts -->
<script>

    $.ajax({
        url: "ajax/ajax.categorias.php",
        type: "POST",
        success: function (data) {
            $("#dataTable").html(data);
            $('#dataTable').DataTable();
        }
    });

    function openModal() {
        $.ajax({
            url: "modal/setCategoria.php",
            method: "POST",
            success: function (data) {
                $("#modal-body").html(data);

            }
        })

    }
    function confirmAdd(){
        var dados = jQuery("#frmCatProduto").serialize();

        jQuery.ajax({
            type: "POST",
            url: "ajax/ajax.setCategoriaProduto.php",
            data: dados

        });
        $('#exampleModal').modal('hide')

    }






</script>

<?php require_once "../footer.php" ?>
