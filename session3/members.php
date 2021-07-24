<?php 
session_start();
if($_SESSION['USERNAME']){

        if($_SESSION['ROLE'] == 'admin'){
            echo $_SESSION['USERNAME'] ."<br>" ;
            echo $_SESSION['PASSWORD'] ."<br>" ;
        
            echo '<a href="logout.php">logout</a>';
            
        }else{
            echo "Sorry haven't a permission" ;
            echo '<a href="logout.php">logout</a>';
        
        }

}else{
    header('location:index.php');
}

?>






?>