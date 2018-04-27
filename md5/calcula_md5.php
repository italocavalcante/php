<?php

if ($_REQUEST["acao"] == "calcular_md5"){
$texto = $_REQUEST["textopuro"];
$textoCriptografado = md5($texto);
$tamanhoString = strlen($textoCriptografado);
$ipCliente = $_SERVER['REMOTE_ADDR'];

echo "Você esta conectado a partir do ip: ".$ipCliente."<br>";
echo "Segue o resultado criptografado: ".$textoCriptografado;
echo "<br>";
echo "O hash possui ".$tamanhoString." caracteres !";

}

?>
