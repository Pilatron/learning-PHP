<?php
function getbigger($a, $b)
{
    if($a > $b)
    {
        echo $a;
    } else
        echo $b;
    echo PHP_EOL;
}
getbigger(15, 25);
getbigger(22, 33);
getbigger(33, 44);

function getbi($ay, $by)
{
    if($ay > $by)
    {
        return $ay;
    } else
    {
        return $by;
    }
}
$bigger = getbi(10,15);
echo $bigger;
echo PHP_EOL;

//функции работы с массивами

$array1 = [1, 2, 3, 4, 5];
$array2 = [6, 7, 8];
$result = array_merge($array1, $array2);
//var_dump($result);

if (array_search(5, $result))
{
    var_dump(array_keys($result));
} else
{
    echo 'no';
}

?>