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


    <!-- FontAwesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Art-Pc-Gamer/lib/fontawesome/css/all.css"/>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../lib/css/style.css">

    <link href="../lib/bootstrapPop/bs4.pop.css" rel="stylesheet" type="text/css">
    <script src="../lib/bootstrapPop/bs4.pop.js"></script>



    <script src="/Art-Pc-Gamer/lib/js/personalize-functions.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="css/estilo.css">

</head>

<?php
session_start();
if(isset($_SESSION['logado']) &&  $_SESSION['logado'] == 'S'){
    header("Location: pages/home.php");
}


?>

<style type="text/css">
    #login-alert{
        display: none;
    }

    .margin-top-pq{
        margin-top: 10px;
    }

    .margin-top-md{
        margin-top: 25px;
    }

    .margin-bottom-md{
        margin-bottom: 25px;
    }

    .padding-top-md{
        padding-top: 30px;
    }
</style>
<body>

<div id="login">
    <div id="login-alert" class="alert alert-danger col-sm-12">
        <span class="glyphicon glyphicon-exclamation-sign"></span>
        <span id="mensagem"></span>
    </div>
    <h3 class="text-center text-white pt-5">Admin Form</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Username:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input id="btn-login" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    $('document').ready(function(){
        $("#btn-login").click(function(){

            var data = $("#login-form").serialize();
            $.ajax({
                type : 'POST',
                url  : 'ajax/login.php',
                data : data,
                dataType: 'json',

                beforeSend: function()
                {
                    $("#btn-login").html('Validando ...');
                },
                success :  function(response){
                        console.log(response)

                    if(response.codigo === 1){
                        console.log("DENTRO")
                        $("#btn-login").html('Entrar');
                        $("#login-alert").css('display', 'none')
                        window.location.href = "pages/home.php";
                    }
                    else{
                        console.log(response.mensagem)
                        $("#btn-login").html('Entrar');
                        $("#login-alert").css('display', 'block')
                        $("#mensagem").html('<strong>Erro! </strong>' + response.mensagem);
                    }
                }
            });
        });

    });
</script>
</html>