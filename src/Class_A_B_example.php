<?php namespace App\src;

use App\src\{ClassA,ClassB};

function task(ClassA $obj)
{
  $obj->doSomething();
}


$obj = new ClassB();
task($obj);
