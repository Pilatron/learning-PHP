<?php

namespace oop;

include 'PhotoCamera.php';
class CanonD900 extends PhotoCamera
{
    const NAME = 'Canon D900';

    public int $price = 900;
    public string $date = '2022-07-15';
    public string $body = 'red';

    public string $waterproof = '56';


    public function rotateScreen()
    {
        return 'screen rotated';
    }
}

$canonD900 = new CanonD900();

echo $canonD900->flash('blick').PHP_EOL;
echo $canonD900->photo().PHP_EOL;



