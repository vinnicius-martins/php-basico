<?php
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

if ($idade >= 6 && $idade <= 12){
    echo "O nadador ".$nome." compete na categoria infantil";
}else if($idade > 12 && $idade <= 18){
    echo "O nadador ".$nome." compete na categoria adolescente";
}else if($idade > 18){
    echo "O nadador ".$nome." compete na categoria adulto";
}
