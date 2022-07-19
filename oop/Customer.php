<?php

namespace oop;

/*
 * кароч смотри
 * в чем прелесть пхпсторма
 * если что то подчеркнуто или выделено, то есть проблема
 * если красным подчеркнуто то эта критическая проблема
 *
 * например с самого начала где свойста
 * оно пишет типа что ты не указал тип этой переменной
 * во, теперь не подчеркивает
 *
 *
 * потом в меотде гетИнфо
 * у тебя там выделено фамилия
 * оно говорит что такого свойства вообще нет
 * теперь не подчеркивает
 * в одном месте просто пусть будут все свйойства, а то потом сам запутаешься
 *
 */
 class Customer
 {
     public string $login = "Name";
     public string $password = "password";
     public string $email = "mail";
     public string $city = "city";
     private static $name;

     public function outPut()
     {
         echo "{$this->login}"."{$this->password}"."{$this->city}"."{$this->email}";
     }

     public function Hello()
     {
         echo "Hello, {$this->login}";
     }

     function __construct($login,$password,$city,$email)
     {
         $this ->login = $login;
         $this ->password = $password;
         $this ->city = $city;
         $this ->email =$email;
     }

     public static function setName($name1){
         self::$name = $name1;
     }
     public static function getName(){
         return self::$name;
     }
     public function getInfo(){
         $information = "{$this->login}"."{$this->password}"."{$this->city}"."{$this->email}";
         return $information;
     }
 }

$user = new Customer("Sean","67890","Odessa","SeanOd@i.ua");
echo $user->getInfo();

 Customer::setName('Alexander');
 //echo Customer::getName();

$Guest = new Customer("Alex","1234567","Kyiv","Alex@gmail.com");
//echo $Guest->getInfo(); PHP_EOL;

$admin = new Customer("Max","345","LA","MaxLA@i.ua");
//echo $admin->email; PHP_EOL;
//    $admin->login = "Alex";
//echo $admin->login; PHP_EOL;
//$admin->Hello();
//echo "User: {$admin->getInfo()}.<br/>";


