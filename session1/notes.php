<?php   

$username = "AMIT" ;

// echo "Hello " . $username  . "<br>"; 

$num1 = 4 ; 
$num2 = 10 ; 
$sum = $num1 + $num2 ; 


echo $sum  . '<br>'; 

$test = var_dump($username);
echo $test ."<br>";
/*
  if(condition){
      //code be execute
  }else{
      //code be execute
  }
*/
$username = "AMIT" ;

// if($username == 'AMIT'){
//   echo "Hello Admin" ; 
// }elseif($username == 'AMITexpert'){
//     echo "Hello AMIT expert" ;  
// }else{
//     echo "Hello user" ;   
// }

//shorten if 
 /*   condition ? true : false */
$test = $username == 'AMIT' ? 'Hello Admin' : "Hello user";
echo $test ; 

?>