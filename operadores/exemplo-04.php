<?php
$a = 55.0;
$b = 55;

var_dump($a);
var_dump($b);
echo "<br/><br/>";

echo "<strong>Compare if a is bigger than b.</strong><br/>";
echo "a > b = ";
var_dump($a > $b);
echo "<br/><br/>";

echo "<strong>Compare if a is smaller than b.</strong><br/>";
echo "a < b = ";
var_dump($a < $b);
echo "<br/><br/>";

echo "<strong>Compare if a is equal b.</strong><br/>";
echo "a == b = ";
var_dump($a == $b);
echo "<br/><br/>";

echo "<strong>Compare if a is equal b and if are of the same data type.</strong><br/>";
echo "a === b = ";
var_dump($a === $b);
echo "<br/><br/>";

echo "<strong>Compare if a different of b.</strong><br/>";
echo "a != b = ";
var_dump($a != $b);
echo "<br/><br/>";

echo "<strong>Compare if a different of b.(Value and data type)</strong><br/>";
echo "a !== b = ";
var_dump($a !== $b);
echo "<br/><br/>";
?>
