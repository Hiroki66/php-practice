<?php
$hello = "Hello, PHP!\n";
$num = 42;
print($hello);
print($num);
function hoge()
{
    $name = 'namae';
    print($name);
}

hoge();


$file_list = [];

function add_list($name)
{
    global $file_list;
    $file_name = $name.".php";
    array_push($file_list, $file_name);
}

add_list("function");
var_dump($file_list);

add_list("hello");
var_dump($file_list);


function check($num)
{
    if ($num == 42) {
        print_r('Answer to the Ultimate Question of Life, the Universe, and Everything');
    }
}
check(42);

$even_num = [];
$odd_num = [];

function sort_number($num)
{
    global $even_num, $odd_num;

    if ($num % 2 == 0) {
        array_push($even_num, $num);
    } else {
        array_push($odd_num, $num);
    }
}

for ($i=1; $i<=30; $i++) {
    if ($i%5==0) {
        print("Buzz"."\n");
    } else {
        print($i."\n");
    }
}

for ($i = 1; $i <= 30; $i++) {
    if ($i % 15 == 0) {
        print("FizzBuzz"."\n");
    } elseif ($i % 3 == 0) {
        print("Fizz"."\n");
    } elseif ($i % 5 == 0) {
        print("Buzz"."\n");
    } else {
        print($i."\n");
    }
}
