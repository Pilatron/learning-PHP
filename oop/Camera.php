<?php

namespace oop;

abstract class Camera
{
    protected string $body;
    protected int $price;
    protected string $date;

    public function photo(): string
    {
        $shot = 'shot';
        return $shot;
    }

    public function recording(): string
    {
        return 'video';
    }
}