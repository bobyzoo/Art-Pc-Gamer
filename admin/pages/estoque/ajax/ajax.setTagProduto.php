<?php


require_once "../../../../class/produtos.php";


$post = new stdClass;

foreach ($_POST as $key => $value){
    $post->$key = $value;
}


$pro = new produtos();

$pro->insertTag($post);
