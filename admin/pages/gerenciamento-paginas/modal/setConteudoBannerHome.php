<?php
require_once "../../../../class/produtos.php";

$prod = new produtos();
?>
<style>
    iframe {
        width: 570px !important;
        height: 300px !important;
        border: 1px solid #006699 !important;
        padding: 5px;
        font-family: Tahoma, Geneva, sans-serif;
        background-color: #fff;
        font-size: 14px;
        color: #444;
    }

    textarea {
        font-family: 'Roboto', sans-serif;
        background-color: #fff;
        border: 1px solid #006699;
        width: 575px;
        position: relative;
        padding: 5px 5px;
        font-size: 14px;
        color: #444;
        z-index: 1;
        line-height: 1.45;
        margin: 2px 0;
    }
</style>
<div class="innerbox">
    <form class="user" enctype="multipart/form-data" method="POST" id="frmTag" action="">
        <div class="form-group">
            <div class="form-group">
                <label for="" class="d-block"><h5>Imagem da propaganda</h5></label>
                <input type="file" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="" class="d-block"><h5>Nome da propaganda</h5></label>
                <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="nome">
            </div>
            <label for="" class="d-block"><h5>Crie sua propaganda</h5></label>
            <textarea rows="20" cols="60" name="field1" id="field1" maxlength="10000" class="word_count"><div class="caption-group">
<h2 class="caption title animated fadeInRight" style="display: block;">
by one, get one <span class="primary">50% <strong>off</strong></span>
</h2>
<h4 class="caption subtitle animated fadeInRight" style="display: block;">school supplies &amp; backpacks.*</h4>
<a class="caption button-radius animated fadeInRight" href="#" style="display: inline-block;"><span
class="icon"></span>Compre agora</a>
</div></textarea>
        </div>
    </form>
</div>

<div style="margin: 0px 0px 0px;">
    <iframe id="preview"></iframe>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"
        integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA=="
        crossorigin="anonymous"></script>

<script>
    function GetHTML() {
        let importacoes = "\n" +
            "    <!-- Google Fonts -->\n" +
            "    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet'\n" +
            "          type='text/css'>\n" +
            "    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>\n" +
            "    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>\n" +
            "\n" +
            "    <!-- Bootstrap -->\n" +
            "    <link rel=\"stylesheet\" href=\"/Art-Pc-Gamer/css/bootstrap.min.css\">\n" +
            "\n" +
            "    <!-- Font Awesome -->\n" +
            "    <link rel=\"stylesheet\" href=\"/Art-Pc-Gamer/css/font-awesome.min.css\">\n" +
            "\n" +
            "    <!-- Custom CSS -->\n" +
            "    <link rel=\"stylesheet\" href=\"/Art-Pc-Gamer/css/owl.carousel.css\">\n" +
            "    <link rel=\"stylesheet\" href=\"/Art-Pc-Gamer/style.css\">\n" +
            "    <link rel=\"stylesheet\" href=\"../style.css\">\n" +
            "    <link rel=\"stylesheet\" href=\"/Art-Pc-Gamer/css/responsive.css\">\n" + "<style>" +
            "\n" +
            " .bx-pager{\n" +
            "\tdisplay: block;\n" +
            "    text-align: center;\n" +
            "}\n" +
            " .bx-pager-item{\n" +
            "\twidth: 15px;\n" +
            "\theight: 15px;\n" +
            "\tbackground: #fff;\n" +
            "\tfont-size: 0;\n" +
            "\tdisplay: inline-block;\n" +
            "\tborder-radius: 50%;\n" +
            "\tmargin: 0 3px;\n" +
            "}\n" +
            " .bx-pager-item a{\n" +
            "\twidth: 100%;\n" +
            "\theight: 100%;\n" +
            "\tbackground: #999;\n" +
            "\tdisplay: block;\n" +
            "\tborder-radius: 50%;\n" +
            "}\n" +
            " a.active{\n" +
            "\tbackground: #1bd172;\n" +
            "}\n" +
            " .caption-group{\n" +
            "\tposition: absolute;\n" +
            "    top: 26%;\n" +
            "    right: 16%;\n" +
            "}\n" +
            ".title{\n" +
            "\tmargin: 0;\n" +
            "}\n" +
            ".subtitle{\n" +
            "\tmargin: 0;\n" +
            "\tmargin-top: 5px;\n" +
            "}\n" +
            ".button-radius{\n" +
            "\tmargin-top: 27px;\n" +
            "}\n" +
            " .primary{\n" +
            "\tcolor: #1bd172;\n" +
            "}\n" +
            ".caption{\n" +
            "\n" +
            "}\n" +
            "</style>";
        var HTML = $('#field1').val();
        return importacoes + HTML;
    }

    $(function () {
        $('.innerbox').on("keyup", function () {
            atualizaPreview();
        });
    });
    atualizaPreview();

    function atualizaPreview() {
        var targetp = $('#preview')[0].contentWindow.document;
        targetp.open();
        targetp.close();

        $('body', targetp).append(GetHTML());
    }

</script>
