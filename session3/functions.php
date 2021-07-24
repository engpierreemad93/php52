<?php 
if(isset($_POST['number1'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    function sum($num1 , $num2){
        $result = $num1 + $num2;
        return $result;
    }
    
     echo sum($number1 , $number2);
}


?>

<form method="post" action="functions.php">
    <input type="number" placeholder="insert num" name="number1">
    <input type="number" placeholder="insert num" name="number2">
    <button type="submit">sum</button>
</form>