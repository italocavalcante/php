<?php
$i = 0;
	for ( $i-0 ; $i<10 ; $i++ ){
		echo "<strong>Primeiro programa em php !</strong><br/>";
	}

$host="127.0.0.1";
$user="root";
$password="#Portus@Cale10";
$database="mysql";

	$link = mysqli_connect($host, $user, $password, $database);
	
	if (!$link) {
    		echo "Error: Unable to connect to MySQL." . PHP_EOL;
    		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    		exit;
	}

echo "Success: A proper connection to MySQL was made! The $database database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
/*Sempre terminar instrução com ponto e vírgula ;
<strong></strong> é uma tag HTML que deixa o texto
em negrito*/
?>
