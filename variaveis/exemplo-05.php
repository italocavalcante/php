<?php
$nome = "Glaucio";

function teste(){
// global means that the function will take the
// variable outside of the function.
	global $nome;
	echo $nome;
}


teste();

?>
