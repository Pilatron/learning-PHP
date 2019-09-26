<?php

header('Content-type: text/plain; charset=utf-8');

   $string = 'This is example';

       echo strlen($string) . PHP_EOL;

       echo strpos($string, 'T') . PHP_EOL;
            if (strpos($string, 'T') === false) echo 'T dont found';
            else echo 'T is found!';
                 var_dump(strpos($string, 'T'));

        echo strpos($string, 'is', 4) . PHP_EOL; //ищет is в строке начиная с 4го элем.

        echo substr($string, 2, -2) . PHP_EOL; //обрезает строку: 2 сначала, 2 с конца.

        echo str_replace('is', 'To', $string) . PHP_EOL;
        echo str_replace(['is' , 'ple'], ['To' , 'zoo'], $string) . PHP_EOL;

        echo trim('              is jora             ') . PHP_EOL;
    ?>