<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Page- Ustora Demo</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome -->
    <!-- FontAwesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Art-Pc-Gamer/lib/fontawesome/css/all.css"/>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../lib/css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="/Art-Pc-Gamer/lib/js/personalize-functions.js"></script>
    <![endif]-->
</head>
<body>


<?php
require_once "../menu.php";
?>


<div class="product-big-title-area mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>MONTE SEU PC</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <form action="" method="post">
        <div class="row item-pc text-uppercase mb-2">
            <div class=" ml-0 col-1 pt-2">
                <img src="../img/icons/cpu.png" alt="" class="mt-2 " >
            </div>
            <div class="col-9 py-5">Processador</div>
            <div class="col-2 ml-0 py-5 text-center px-0" style="font-size: 15px">
                <a href="" class="btn btn-primary " id="selecionar-1" onclick="openModal(1,'Processador')"
                   data-toggle="modal" data-target="#exampleModal">Selecionar</a>
                <div class="d-none edit-1">
                    <div class="btn" style="font-size: 18px"  data-toggle="modal" data-target="#exampleModal" onclick="editItem(1,'Processaodor')"><i class="fas fa-edit"></i></div>
                    <div class="btn" style="font-size: 18px" onclick="removeItem(1)"><i class="far fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <input type="hidden" value="" id="form-1">
        </div>

        <div class="row item-pc text-uppercase mb-2">
            <div class=" ml-0 col-1 pt-2">
                <img src="../img/icons/placa-mae.png" alt="" class="mt-2 " >
            </div>
            <div class="col-9 py-5">Placa mãe</div>
            <div class="col-2 ml-0 py-5 text-center px-0" style="font-size: 15px">
                <a href="" class="btn btn-primary " id="selecionar-3" onclick="openModal(3,'Placa mãe')"
                   data-toggle="modal" data-target="#exampleModal">Selecionar</a>
                <div class="d-none edit-3">
                    <div class="btn" style="font-size: 18px"  data-toggle="modal" data-target="#exampleModal" onclick="editItem(3,'Placa mãe')"><i class="fas fa-edit"></i></div>
                    <div class="btn" style="font-size: 18px" onclick="removeItem(3)"><i class="far fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <input type="hidden" value="" id="form-3">
        </div>


        <div class="row item-pc text-uppercase mb-2">
            <div class=" ml-0 col-1 pt-2">
                <img src="../img/icons/gpu.png" alt="" class="mt-2 " >
            </div>
            <div class="col-9 py-5">Placa vídeo</div>
            <div class="col-2 ml-0 py-5 text-center px-0" style="font-size: 15px">
                <a href="" class="btn btn-primary " id="selecionar-2" onclick="openModal(2,'Placa mãe')"
                   data-toggle="modal" data-target="#exampleModal">Selecionar</a>
                <div class="d-none edit-2">
                    <div class="btn" style="font-size: 18px"  data-toggle="modal" data-target="#exampleModal" onclick="editItem(2,'Placa vídeo')"><i class="fas fa-edit"></i></div>
                    <div class="btn" style="font-size: 18px" onclick="removeItem(2)"><i class="far fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <input type="hidden" value="" id="form-2">
        </div>


        <div class="row item-pc text-uppercase mb-2">
            <div class=" ml-0 col-1 pt-2">
                <img src="../img/icons/resfriador.png" alt="" class="mt-2 " >
            </div>
            <div class="col-9 py-5">Fans (OPCIONAL)</div>
            <div class="col-2 ml-0 py-5 text-center px-0" style="font-size: 15px">
                <a href="" class="btn btn-primary " id="selecionar-2" onclick="openModal(2,'Fans (OPCIONAL)')"
                   data-toggle="modal" data-target="#exampleModal">Selecionar</a>
                <div class="d-none edit-2">
                    <div class="btn" style="font-size: 18px"  data-toggle="modal" data-target="#exampleModal" onclick="editItem(2,'Fans (OPCIONAL)')"><i class="fas fa-edit"></i></div>
                    <div class="btn" style="font-size: 18px" onclick="removeItem(2)"><i class="far fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <input type="hidden" value="" id="form-2">
        </div>


        <div class="row item-pc text-uppercase mb-2">
            <div class=" ml-0 col-1 pt-2">
                <img src="../img/icons/rato.png" alt="" class="mt-2 " >
            </div>
            <div class="col-9 py-5">Memória RAM</div>
            <div class="col-2 ml-0 py-5 text-center px-0" style="font-size: 15px">
                <a href="" class="btn btn-primary " id="selecionar-4" onclick="openModal(4,'Memória RAM')"
                   data-toggle="modal" data-target="#exampleModal">Selecionar</a>
                <div class="d-none edit-4">
                    <div class="btn" style="font-size: 18px"  data-toggle="modal" data-target="#exampleModal" onclick="editItem(4,'Memória RAM')"><i class="fas fa-edit"></i></div>
                    <div class="btn" style="font-size: 18px" onclick="removeItem(4)"><i class="far fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <input type="hidden" value="" id="form-4">
        </div>


        <div class="row item-pc text-uppercase mb-2">
            <div class=" ml-0 col-1 pt-2">
                <img src="../img/icons/disco-rigido.png" alt="" class="mt-2 " >
            </div>
            <div class="col-9 py-5">HD</div>
            <div class="col-2 ml-0 py-5 text-center px-0" style="font-size: 15px">
                <a href="" class="btn btn-primary " id="selecionar-5" onclick="openModal(5,'HD')"
                   data-toggle="modal" data-target="#exampleModal">Selecionar</a>
                <div class="d-none edit-5">
                    <div class="btn" style="font-size: 18px"  data-toggle="modal" data-target="#exampleModal" onclick="editItem(5,'HD')"><i class="fas fa-edit"></i></div>
                    <div class="btn" style="font-size: 18px" onclick="removeItem(5)"><i class="far fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <input type="hidden" value="" id="form-5">
        </div>




        <div class="row item-pc text-uppercase mb-2">
            <div class=" ml-0 col-1 pt-2">
                <img src="../img/icons/ssd.png" alt="" class="mt-2 " >
            </div>
            <div class="col-9 py-5">SSD (OPCIONAL)</div>
            <div class="col-2 ml-0 py-5 text-center px-0" style="font-size: 15px">
                <a href="" class="btn btn-primary " id="selecionar-8" onclick="openModal(8,'SSD (OPCIONAL)')"
                   data-toggle="modal" data-target="#exampleModal">Selecionar</a>
                <div class="d-none edit-8">
                    <div class="btn" style="font-size: 18px"  data-toggle="modal" data-target="#exampleModal" onclick="editItem(8,'SSD (OPCIONAL)')"><i class="fas fa-edit"></i></div>
                    <div class="btn" style="font-size: 18px" onclick="removeItem(8)"><i class="far fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <input type="hidden" value="" id="form-8">
        </div>


        <div class="row item-pc text-uppercase mb-2">
            <div class=" ml-0 col-1 pt-2">
                <img src="../img/icons/dvd.png" alt="" class="mt-2 " >
            </div>
            <div class="col-9 py-5">Gravador de DVD (OPCIONAL)</div>
            <div class="col-2 ml-0 py-5 text-center px-0" style="font-size: 15px">
                <a href="" class="btn btn-primary " id="selecionar-9" onclick="openModal(9,'Gravador de DVD (OPCIONAL)')"
                   data-toggle="modal" data-target="#exampleModal">Selecionar</a>
                <div class="d-none edit-9">
                    <div class="btn" style="font-size: 18px"  data-toggle="modal" data-target="#exampleModal" onclick="editItem(9,'Gravador de DVD (OPCIONAL)')"><i class="fas fa-edit"></i></div>
                    <div class="btn" style="font-size: 18px" onclick="removeItem(9)"><i class="far fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <input type="hidden" value="" id="form-9">
        </div>


        <div class="row item-pc text-uppercase mb-2">
            <div class=" ml-0 col-1 pt-2">
                <img src="../img/icons/poder.png" alt="" class="mt-2 " >
            </div>
            <div class="col-9 py-5">Fonte de energia</div>
            <div class="col-2 ml-0 py-5 text-center px-0" style="font-size: 15px">
                <a href="" class="btn btn-primary " id="selecionar-10" onclick="openModal(10,'Fonte de energia')"
                   data-toggle="modal" data-target="#exampleModal">Selecionar</a>
                <div class="d-none edit-10">
                    <div class="btn" style="font-size: 18px"  data-toggle="modal" data-target="#exampleModal" onclick="editItem(10,'Fonte de energia')"><i class="fas fa-edit"></i></div>
                    <div class="btn" style="font-size: 18px" onclick="removeItem(10)"><i class="far fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <input type="hidden" value="" id="form-10">
        </div>


        <div class="row item-pc text-uppercase mb-2">
            <div class=" ml-0 col-1 pt-2">
                <img src="../img/icons/pc.png" alt="" class="mt-2 " >
            </div>
            <div class="col-9 py-5">Gabinete</div>
            <div class="col-2 ml-0 py-5 text-center px-0" style="font-size: 15px">
                <a href="" class="btn btn-primary " id="selecionar-11" onclick="openModal(11,'Gabinete')"
                   data-toggle="modal" data-target="#exampleModal">Selecionar</a>
                <div class="d-none edit-11">
                    <div class="btn" style="font-size: 18px"  data-toggle="modal" data-target="#exampleModal" onclick="editItem(11,'Gabinete')"><i class="fas fa-edit"></i></div>
                    <div class="btn" style="font-size: 18px" onclick="removeItem(11)"><i class="far fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <input type="hidden" value="" id="form-11">
        </div>


        <div class="row item-pc text-uppercase mb-2">
            <div class=" ml-0 col-1 pt-2">
                <img src="../img/icons/monitor.png" alt="" class="mt-2 " >
            </div>
            <div class="col-9 py-5">Monitor (OPCIONAL)</div>
            <div class="col-2 ml-0 py-5 text-center px-0" style="font-size: 15px">
                <a href="" class="btn btn-primary " id="selecionar-12" onclick="openModal(12,'Monitor (OPCIONAL)')"
                   data-toggle="modal" data-target="#exampleModal">Selecionar</a>
                <div class="d-none edit-12">
                    <div class="btn" style="font-size: 18px"  data-toggle="modal" data-target="#exampleModal" onclick="editItem(12,'Monitor (OPCIONAL)')"><i class="fas fa-edit"></i></div>
                    <div class="btn" style="font-size: 18px" onclick="removeItem(12)"><i class="far fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <input type="hidden" value="" id="form-12">
        </div>

        <div class="row item-pc text-uppercase mb-2">
            <div class=" ml-0 col-1 pt-2">
                <img src="../img/icons/rato.png" alt="" class="mt-2 " >
            </div>
            <div class="col-9 py-5">Mouse (OPCIONAL)</div>
            <div class="col-2 ml-0 py-5 text-center px-0" style="font-size: 15px">
                <a href="" class="btn btn-primary " id="selecionar-13" onclick="openModal(13,'Mouse (OPCIONAL)')"
                   data-toggle="modal" data-target="#exampleModal">Selecionar</a>
                <div class="d-none edit-13">
                    <div class="btn" style="font-size: 18px"  data-toggle="modal" data-target="#exampleModal" onclick="editItem(13,'Mouse (OPCIONAL)')"><i class="fas fa-edit"></i></div>
                    <div class="btn" style="font-size: 18px" onclick="removeItem(13)"><i class="far fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <input type="hidden" value="" id="form-13">
        </div>


        <div class="row item-pc text-uppercase mb-2">
            <div class=" ml-0 col-1 pt-2">
                <img src="../img/icons/teclado.png" alt="" class="mt-2 ">
            </div>
            <div class="col-9 py-5">Teclado (OPCIONAL)</div>
            <div class="col-2 ml-0 py-5 text-center px-0" style="font-size: 15px">
                <a href="" class="btn btn-primary " id="selecionar-14" onclick="openModal(14,'Teclado (OPCIONAL)')"
                   data-toggle="modal" data-target="#exampleModal">Selecionar</a>
                <div class="d-none edit-14">
                    <div class="btn" style="font-size: 18px"  data-toggle="modal" data-target="#exampleModal" onclick="editItem(14,'Teclado (OPCIONAL)')"><i class="fas fa-edit"></i></div>
                    <div class="btn" style="font-size: 18px" onclick="removeItem(14)"><i class="far fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <input type="hidden" value="" id="form-14">
        </div>


        <div class="row item-pc text-uppercase mb-2">
            <div class=" ml-0 col-1 pt-2">
                <img src="../img/icons/fone-de-ouvido.png" alt="" class="mt-2">
            </div>
            <div class="col-9 py-5">Headset (OPCIONAL)</div>
            <div class="col-2 ml-0 py-5 text-center px-0" style="font-size: 15px">
                <a href="" class="btn btn-primary " id="selecionar-15" onclick="openModal(15,'Headset (OPCIONAL)')"
                   data-toggle="modal" data-target="#exampleModal">Selecionar</a>
                <div class="d-none edit-15">
                    <div class="btn" style="font-size: 18px"  data-toggle="modal" data-target="#exampleModal" onclick="editItem(15,'Headset (OPCIONAL)')"><i class="fas fa-edit"></i></div>
                    <div class="btn" style="font-size: 18px" onclick="removeItem(15)"><i class="far fa-trash-alt"></i>
                    </div>
                </div>
            </div>
            <input type="hidden" value="" id="form-15">
        </div>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-lg modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"> title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="confirmItem()">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<? require_once "../footer.php" ?>
<script src="/Art-Pc-Gamer/lib/js/personalize-functions.js"></script>

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="../js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="../js/main.js"></script>



<script>

    let id_atual = 0;
    let item_atual = 0;

    function removeItem(id) {
        $(".edit-" + id).addClass("d-none");
        $("#selecionar-" + id).removeClass("d-none");
        $("#form-"+item).val("")
    }

    function editItem(item,nome) {
        console.log($("#form-"+item).val())
        openModal(item,nome, $("#form-"+item).val())
    }

    function confirmItem() {
        $('#exampleModal').modal('hide')
        $(".edit-" + item_atual).removeClass("d-none");
        $("#selecionar-" + item_atual).addClass("d-none");
        

    }

    function openModal(item, nome, select = "") {
        $("#modal-title").html("<div class='text-uppercase' style='font-size: 30px; font-weight: bold;'>" + nome + "</div>");
        id_atual = select

        $.ajax({
            url: "modal/itens_de_compra.php",
            method: "POST",
            data: {id: item, idatual: select},
            success: function (data) {
                item_atual = item;
                $("#modal-body").html(data);

            }
        })

    }

    function checkButton(id) {
        checkitem(id)
        recheckitem(id_atual)
        id_atual = id;
        $("#form-"+item_atual).val(id_atual);
    }

    function checkitem(id) {
        remove_class("check-" + id, "fa-circle")
        add_class("check-" + id, "fa-check-circle")
        add_class("item-" + id, "item-check")
    }

    function recheckitem(id) {
        add_class("check-" + id, "fa-circle")
        remove_class("check-" + id, "fa-check-circle")
        remove_class("item-" + id, "item-check")
    }


</script>
</body>
</html>