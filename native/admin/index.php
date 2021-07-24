<?php require "config.php"?>
<?php 
// echo  $_SERVER['REQUEST_METHOD'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['adminusername'];
    $password =sha1($_POST['adminpassword']);
    $stmt = $connection->prepare("SELECT * FROM users WHERE username=? AND password=? AND role !=3");
    $stmt->execute(array($username , $password));
    $row= $stmt->fetch();
    // echo "<pre>";
    //  print_r($row);
    // echo "</pre>";
    $count =$stmt->rowCount();
    if($count == 1){
        header('location:dashboard.php');
    }else{
        echo "sorry";
    }
    
}
?>
<?php include "includes/header.php"?>
<!-- Start admin -->
<div class="container">
    <form method="post" action="<?php $_SERVER['PHP_SELF']?>" class="mt-5">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">username</label>
            <input type="text" class="form-control" name="adminusername">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="adminpassword">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- End admin -->
<?php include "includes/footer.php"?>