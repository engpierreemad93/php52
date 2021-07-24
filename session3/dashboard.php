<?php 
session_start();

echo $_SESSION['USERNAME'] ."<br>" ;
echo $_SESSION['PASSWORD'] ."<br>" ;


echo '<a href="members.php">Members</a>';

// echo "<pre>";
//     print_r($_SESSION);
// echo "</pre>";
?>

<?php require "includes/header.php"?>

test 

<?php require "includes/footer.php"?>
