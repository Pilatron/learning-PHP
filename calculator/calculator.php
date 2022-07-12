<?php

//    var_dump( $_GET );die();

if (!array_key_exists('operator',$_GET)) {
    echo 'Key is not available';
    return;
}

$first_operand  = $_GET['num1'];
$second_operand = $_GET['num2'];
$sign = $_GET['operator'];

function checkSign($sign):bool {
    $result = false;

    $signs = ['+','-','*','/'];

    if (in_array($sign, $signs)) {
        $result = true;
    }
    return $result;
}

function calculate($first_operand, $second_operand, $sign):string {
    $result = '';

    $check_sign = checkSign($sign);

    if (!$check_sign) {
        return 'Sign is not correct';
    }


    switch ($sign) {
        case '+':
            $result = $first_operand + $second_operand;
            break;
        case '-':
            $result = $first_operand - $second_operand;
            break;
        case '*':
            $result = $first_operand * $second_operand;
            break;
        case '/':
            $result = $first_operand / $second_operand;
            break;
    }

    return $result;
}

$calc = calculate($first_operand, $second_operand, $sign);

if ($calc == '') {
    echo 'No result';
}
else {
    echo $calc;
}

?>
