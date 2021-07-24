<?php 
session_start();
if(isset($_POST['username'])){
    $_SESSION['USERNAME'] = $_POST['username'] ;
    $_SESSION['PASSWORD'] = $_POST['password'];
    $_SESSION['ROLE'] = 'user' ;
}
?>
<?php include "includes/header.php"?>

<?php include "includes/footer.php"?>