<?php 
require "vendor/autoload.php";
use app\http\controller\Product ;




$laptop = new  Product('test' , "26") ; 

echo $laptop->index();




?>