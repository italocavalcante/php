<?php

// Basic data types.
$nome = "Hcode";
$site = 'www.hcode.com.br';
$ano =  1990;
$salario = 5500.99;
$bloqueado = false;
// Composed data types.
// array exemple:
$frutas = array("abacaxi" , "laranja", "manga");
echo $frutas[2]."<br/>";

// Object example:
$nascimento = new Datetime();

// Special data type below;
// resource
$arquivo = fopen("exemplo-03.php", "r");
var_dump($arquivo);

// Null
$nulo = NULL;

// Take attention with the difference
// between null and empty, below we have
// a variable string empty.
$vazio = "";

?>
