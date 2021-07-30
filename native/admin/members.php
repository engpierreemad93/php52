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
   $stmt= $connection->prepare('SELECT * FROM users WHERE role=3');
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
                    <a class="btn btn-info" href="#">show</a>
                    <a class="btn btn-warning" href="#">edit</a>
                    <a class="btn btn-danger" href="#">delete</a>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
    <a class="btn btn-primary" href="members.php?do=create">add user</a>
</div>
<?php elseif($action == 'create'):?>
     <!-- this is form display to end user-->  
<?php elseif($action == 'store'):?>
    <!-- this form for coding operation-->  

<?php elseif($action == 'edit'):?>
<?php elseif($action == 'update'):?>
<?php elseif($action == 'show'):?>
<?php elseif($action == 'delete'):?>
<?php else:?>
<h1>404 Page not found</h1>
<?php endif?>

<!--include file operation-->
<?php include "includes/footer.php"?>