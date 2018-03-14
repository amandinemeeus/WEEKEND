<?php

/* var_dump($_GET); */

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$op = $_GET["op"];

echo ($num1 . " " . $op . " ". $num2 . " = ");

switch ($op) {
    case '+': echo $num1 + $num2; break;
    case '-': echo $num1 - $num2; break;
    case '*': echo $num1 * $num2; break;
    case '/': echo $num1 / $num2; break;

}