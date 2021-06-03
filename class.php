<?php
class Human
{
    public function __construct()
    {
        $this->name = null;
        $this->address = null;
    }

    public function show()
    {
        print($this->name."\n");
        print($this->address."\n");
    }
}

class Actor extends Human
{
    public function getShow()
    {
        parent::show();
    }
}

$actor = new Actor();

$actor->name = "大泉";
$actor->address = "北海道";

// $actor->show();
$actor->getShow();
# => 大泉
#    北海道
