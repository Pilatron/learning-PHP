<?php

header('Content-type: text/plain; charset=utf-8');

    $my_variable = 125; // переменные , массивы
      //echo $my_variable;
$a = array(1,2,3,4,5);
      //echo $a[3];

$f = array(
    'name' => 'Abram',
    'surname' => 'Tulupov',
    'age' => 28,
    'byear' => 1984,
    'education' => array('school','college')
);  // ассоциативный массив
    //echo $f['education'][0];

    $name = 'Don';
    $surname = 'Baton';
    //echo $name . ' ' . $surname;
    $g = 15;
    $h = 20;
    //echo 'answer: ' . ($g*$h)/2;

    $name_1 = 'Arni';
    $age = 15;

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

    function getbigger($a, $b)
    {
      if($a > $b)
      {
          echo $a;
      } else
      {
          echo $b;
      }
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