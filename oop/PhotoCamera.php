<?php

namespace oop;

include 'Camera.php';

class PhotoCamera extends Camera
{
    public string $lens;

    public function flash($type)
    {
        return 'flash ' . $type;
    }
}