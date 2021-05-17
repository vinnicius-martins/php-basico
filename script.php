<?php

session_start();

$categorias = [];
$categorias = 'infantil';
$categorias = 'adolescente';
$categorias = 'adulto';
$categorias = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
//var_dump($nome);
//var_dump($idade);

if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio. Por favor, preencha novamente.';
    header('location: index.php');
    return;
}
else if(strlen($nome)<3){
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 3 caracteres.';
    header('location: index.php');
    return;
}
else if(strlen($nome)>40){
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso.';
    header('location: index.php');
    return;
}
else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Informe um número para idade.';
    header('location: index.php');
    return;
}


if ($idade >= 6 && $idade <= 12){
    $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria infantil";
    header('location: index.php');
    return;
}else if($idade > 12 && $idade <= 18){
    $_SESSION = "O nadador ".$nome." compete na categoria adolescente";
    header('location: index.php');
    return;
}else if($idade > 18){
    $_SESSION = "O nadador ".$nome." compete na categoria adulto";
    header('location: index.php');
    return;
}
