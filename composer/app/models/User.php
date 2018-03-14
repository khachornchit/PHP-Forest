<?php
namespace App\Models;
class User {
    function __construct() {
        echo "Initial instance of User <br>";
    }
    
    function Greeting() {
    	echo "Greeting from User<br>";
    }
}