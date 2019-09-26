<?php
if( $name_1 = 'Arni' and $age >= 20){
    //echo 'hello man';
}//else { echo 'goaway'; }

$rating = 15;

if( $rating >= 25 and $rating <= 75)
{
    // echo 'ты в диапазоне';
}
else
{
    // echo 'не достиг диапазон';
}
//циклы
for( $i = 1; $i <= 10; $i++)
{
    echo $i;
    if ( $i%2 == 0){ echo ' - четное число';}
    else { echo ' - нечетное число'; }
    echo PHP_EOL;
}

$names = [
    'Jonny', 'Luk', 'Woker', 'Arni', 'Sly'
];
foreach ( $names as $value) {echo $value; echo PHP_EOL;}

$numbers = [5,10,25,64];
foreach ( $numbers as $num)
{
    echo 'куб числа ' . $num . ' = ' . ($num*$num*$num); echo PHP_EOL;
}