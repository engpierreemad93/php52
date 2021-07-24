<?php
//indexd array
  
// $user = array('250' , 'amit' , '123456' , 'amit@info.com' , 'admin');
// // echo count($user). "<br>";

// for($i=0 ; $i< count($user) ;  $i++){
//     echo $user[$i].'<br>';
// }


//asscoiative array

$user = array(
            'userid' => 5 ,
            'username' => 'amit' ,
            'password' => '123456' ,
            'email' => 'amit@info.com',
            'role' =>'admin',
);
// echo "<pre>";
// print_r($user);
// echo "</pre>";

foreach($user as $key=>$data){
   echo $key. " => ".$data ."<br>";
}
?>