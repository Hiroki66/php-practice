<?php

class Car
{
    public static $class_name ="Car";

    public function __construct()
    {
        print("init");
        $this->name="";
    }

    public function show()
    {
        print($this->name."\n");
    }
}

$car = new Car();
$car_t = new Car();
$car->name="セダン";
$car_t->name="12345";
$car->show();
$car_t->show();
print(Car::$class_name);

class Human
{
    public static $class_name = "Human";

    public function init()
    {
        $this->name = "大泉";
    }

    public function show()
    {
        print($this->name."\n");
    }
}
