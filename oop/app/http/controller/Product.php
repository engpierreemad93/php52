<?php 
namespace app\http\controller ;

use app\http\controller\ProductMethod\Cart;
use app\http\controller\ProductMethod\Instock;

// use  app\http\controller\Crud ;


class Product{
   use Instock  , Cart  ;
    public $name;
    public $age ; 
   public function __construct($n , $a){
       $this->name = $n ;
       $this->age = $a ; 
   }

    public function index(){
        return "display all product from app file " ;
    }

    public function create(){
        return "create product" ;
    }
    
    public function __call($name, $arguments){
         echo $name . "  Not Found , please use our BluePrint" . "<br>" ;
         foreach($arguments as $argument){
             echo "Don't have this arg " . $argument . "<br>";
         }
    } 

    public function __set($name, $value)
    {
        echo $name . "  Not Found" ;

        echo $value . " Not Found" ;
    }

    public function __get($name)
    {
        echo $name . "  Not Found" ;   
    }
}


?>