<?php
foreach ([1,2,3] as $value) {
    echo $value . PHP_EOL;

    echo "<br>";
}

$arr = array(1, 2, 3, 4);
foreach ($arr as $key => &$value) {
    $value = $value * 2;
    $key++;
    echo $key . " - "; echo PHP_EOL;
    echo $value . "<br>";


}
// массив $arr сейчас таков: array(2, 4, 6, 8)
unset($value); // разорвать ссылку на последний элемент