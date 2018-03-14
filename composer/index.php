<?php
use Any\Class1;
use Any\Class2;
use Any\Class3;

require("vendor/autoload.php");

$users = new App\Controllers\UsersController();
$user = new App\Models\User();
$file = new App\Models\File();
$helpers = new App\Helpers;

echo concatStrings("Hello1", "Hello2");

$user->Greeting();

$class1 = new Class1();
$class2 = new Class2();
$class3 = new Any\Class3();

echo "Hello2";
