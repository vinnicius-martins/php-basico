<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = 'Eduardo';
$idade = 8;
//var_dump($nome);
//var_dump($idade);

if ($idade >=6 && $idade <= 12 ){
    echo 'O aluno '.$nome.' compete na categoria infantil';
}else if($idade >= 13 && $idade <=18){
    echo 'adolescente';
}else if($idade > 18){
    echo 'adulto';
}