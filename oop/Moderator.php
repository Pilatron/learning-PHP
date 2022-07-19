<?php

namespace oop;
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'Customer.php';
class Moderator extends Customer
{
    public $info;
    public $rights;
}

$moder = new Moderator("Buch","54321","Kharkiv","B@gmail.com");
echo $moder->getInfo();


