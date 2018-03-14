

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="index.php">
        <p>
            Num1: <input type="number" name="num1" />
            <br>
            Opération:  <select name="op">
                            <option value="+"> + </option>
                            <option value="-"> - </option>
                            <option value="*"> * </option>
                            <option value="/"> / </option>
                        </select> 
            <br>
            Num2: <input type="number" name="num2" />
            <br>
            
            <input type="submit" value="Valider" />
        </p>
</form>
<?php

if (isset($_GET["num1"])){

try {$num1 = (int)($_GET["num1"]);} 
catch (Exception $e){ 
    die;
}

$num2 = $_GET["num2"];
$op = $_GET["op"];


if (!in_array($op, array("+","-","*","/"))) {
    die ("Not an op");
}

echo ($num1 . " " . $op . " ". $num2 . " = ");

switch ($op) {
    case '+': echo $num1 + $num2; break;
    case '-': echo $num1 - $num2; break;
    case '*': echo $num1 * $num2; break;
    case '/': echo $num1 / $num2; break;

}
}

?>
</body>
</html>