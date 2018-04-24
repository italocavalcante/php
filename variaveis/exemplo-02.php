<?php
// Declare integer variable.
$anoNascimento = 1994;

// Declare sting variable
$nome1 = "Italo";

//Declare string variable
$sobrenome1 = "Cavalcante";

// Declare string variable
// with concatening string
$nomeCompleto = $nome1." ".$sobrenome1;

// Show variable's content.
echo "$nomeCompleto<br/>";

// Clean variable's from memory.
unset($nomeCompleto);

// The issset() funcion verify if the variable
// exists on memory.

	if (isset($nomeCompleto)){
	echo "$nomeCompleto";
	}
		else{
		echo "Variável expurgada";
		}

?>
