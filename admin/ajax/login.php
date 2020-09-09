<?php
session_start();

require '../../class/user.php';

// Instancia Conexão PDO

// Recebe os dados do formulário
$user = (isset($_POST['username'])) ? $_POST['username'] : '';
$senha = (isset($_POST['password'])) ? $_POST['password'] : '';


// Dica 2 - Validações de preenchimento e-mail e senha se foi preenchido o e-mail
if (empty($user)) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha seu login');
    echo json_encode($retorno);
    exit();
}

if (empty($senha)) {

    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha sua senha!');
    echo json_encode($retorno);
    exit();
}

$login = new user();
$retorno = $login->findUser($user, $senha);

// Dica 6 - Válida a senha utlizando a API Password Hash
if (!empty($retorno)) {
    $_SESSION['id'] = $retorno->id;
    $_SESSION['nome'] = $retorno->nome;
    $_SESSION['email'] = $retorno->usuario;
    $_SESSION['logado'] = 'S';
} else {
    $_SESSION['logado'] = 'N';
}


// Se logado envia código 1, senão retorna mensagem de erro para o login
if ($_SESSION['logado'] == 'S') {
    $retorno = array('codigo' => 1, 'mensagem' => 'Logado com sucesso!');
    echo json_encode($retorno);
    exit();
} else {
        $retorno = array('codigo' => '0', 'mensagem' => 'Usuário não autorizado');
        echo json_encode($retorno);
        exit();
    }