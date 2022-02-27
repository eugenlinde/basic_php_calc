<?php
function myCalculaotr($num1, $oper, $num2) {
    $sum;
    switch ($oper) {
        case "add":
            $sum = $num1 + $num2;
            break;
        case "sub":
            $sum = $num1 + $num2;
            break;
        default:
            $sum = "There was an error!";
            break;
    }
    return $sum;
}

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$oper = $_GET["oper"]; 

echo "Value: " . myCalculaotr($num1, $oper, $num2);
?>