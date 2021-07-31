<?php 
$action= isset($_GET['do'])?$_GET['do']:'index';
?>
<!--include files operation-->
<?php require "config.php"?>
<?php session_start()?>
<?php include "includes/header.php"?>
<?php include "includes/navbar.php"?>

<!--Start CRUD operation-->
<?php if($action == 'index'):?>
<!-- Show all users page-->
<?php 
   $user=3;
   $stmt= $connection->prepare('SELECT * FROM users WHERE role ='.$user);
   $stmt->execute();
   $users= $stmt->fetchAll();  
   ?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>username</th>
                <th>email</th>
                <th>created at</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user):?>
            <tr>
                <td><?= $user['username']?></td>
                <td><?= $user['email']?></td>
                <td><?= $user['created_at']?></td>
                <td> 
                    <a class="btn btn-info" href="members.php?do=show&selection=<?= $user['user_id']?>">show</a>
                    <?php
                       $isAdmin = 1 ; 
                       if($_SESSION['ROLE'] == $isAdmin):
                       ?>
                        <a class="btn btn-warning" href="members.php?do=edit&selection=<?= $user['user_id']?>">edit</a>
                        <a class="btn btn-danger" href="members.php?do=delete&selection=<?= $user['user_id']?>">delete</a>
                    <?php endif?>    
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
    <a class="btn btn-primary" href="members.php?do=create">add user</a>
</div>
<?php elseif($action == 'create'):?>
<!-- this is form display to end user-->
<div class="container">
    <h1>Add user</h1>
    <form method="post" action="members.php?do=store">
        <div class="mb-3">
            <label class="form-label">username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="useremail">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="userpassword">
        </div>
        <div class="mb-3">
            <label class="form-label">Fullname</label>
            <input type="text" class="form-control" name="userfullname">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php elseif($action == 'store'):?>
<!-- this form for coding operation-->
<?php 
  if($_SERVER['REQUEST_METHOD']=='POST'){
     $username = $_POST['username'];
     $email = $_POST['useremail'];
     $password= sha1($_POST['userpassword']);
     $fullname =$_POST['userfullname'];
     $stmt= $connection->prepare("INSERT INTO users (username , password , email , fullname , created_at , role) 
                                  VALUES (? ,  ? , ? , ? ,now() , 3)
                                ");
     $stmt->execute(array($username ,  $password , $email ,$fullname));
     header('location:members.php?do=create');
  }

?>

<?php elseif($action == 'edit'):?>
    <?php 
           //for security wiase 
           $userid = isset($_GET['selection']) && is_numeric($_GET['selection'])?intval($_GET['selection']):0;
           $stmt=$connection->prepare('SELECT * FROM users WHERE user_id=?');
           $stmt->execute(array($userid));
           $user = $stmt->fetch();
           $count = $stmt->rowCount(); 
    ?>
        <!-- if condition that display user if in DB-->
        <?php
          $inDB = 1;
          if($count == $inDB):
          ?>
        <div class="container">
            <h1>Edit user</h1>
            <form method="post" action="members.php?do=update">
                <input type="hidden" value="<?= $user['user_id']?>" name="userid">
                <div class="mb-3">
                    <label class="form-label">username</label>
                    <input type="text" class="form-control" value="<?= $user['username']?>" name="username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" value="<?= $user['email']?>" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" value="<?= $user['password']?>" name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Fullname</label>
                    <input type="text" class="form-control" value="<?= $user['fullname']?>" name="fullname">
                </div>
                <button type="submit"  class="btn btn-primary">Update</button> 
                <a class="btn btn-dark" href="members.php">back</a>
            </form>
        </div>
        <?php  else:?>
        <?php header('location:members.php')?>
        <?php endif?>    

<?php elseif($action == 'update'):?>
    <?php 
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $userid = $_POST['userid'] ;
        $username = $_POST['username'];
        $password =$_POST['password'];
        $email =  $_POST['email'];
        $fullname = $_POST['fullname'];

        $stmt = $connection->prepare('UPDATE users SET username=? , password=? , email=? , fullname=? WHERE  user_id=?');
        $stmt->execute(array($username , $password  , $email , $fullname , $userid ));
        header('location:members.php?do=edit');

      }     
    ?>
<?php elseif($action == 'show'):?>
    <?php 
        //for security wiase 
        $userid = isset($_GET['selection']) && is_numeric($_GET['selection'])?intval($_GET['selection']):0;
        $stmt = $connection->prepare('SELECT * FROM users WHERE user_id =? ');
        $stmt->execute(array($userid));
        $user=$stmt->fetch();
        $count = $stmt->rowCount();
    ?>
    <!-- if condition that display user if in DB-->
    <?php if($count == 1):?>
    <div class="container">
        <h1>Show user</h1>
        <form method="post" action="members.php?do=store">
            <div class="mb-3">
                <label class="form-label">username</label>
                <input type="text" class="form-control" value="<?= $user['username']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" value="<?= $user['email']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" value="<?= $user['password']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Fullname</label>
                <input type="text" class="form-control" value="<?= $user['fullname']?>">
            </div>
            <a class="btn btn-dark" href="members.php">back</a>
        </form>
    </div>
    <?php  else:?>
    <?php header('location:members.php')?>
    <?php endif?>
<?php elseif($action == 'delete'):?>
    <?php 
        $userid = isset($_GET['selection']) && is_numeric($_GET['selection'])?intval($_GET['selection']):0;
        $stmt= $connection->prepare('DELETE FROM users WHERE user_id=?');
        $stmt->execute(array($userid));
        header('location:members.php');
        
     ?>
    
<?php else:?>
<h1>404 Page not found</h1>
<?php endif?>

<!--include file operation-->
<?php include "includes/footer.php"?>