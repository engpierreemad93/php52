<?php 
/*
    CRUD=> create recored update delete 
    SPA
    ======
    *=if condition
    *= some one check our choice (GET request)
*/
//  $action= '';
// if(isset($_GET['do'])){
//     $action = $_GET['do'];
// }else{
//      $action='index'; 
// }
$action= isset($_GET['do'])?$_GET['do']:'index';
?>

<?php if($action == 'index'):?>
    <h1>Hello From index page</h1>
    <a class="btn btn-primary" href="members.php?do=create">add user</a> 
<?php elseif($action == 'create'):?>
    <h1>Hello From create page</h1>
<?php elseif($action == 'store'):?>
<?php elseif($action == 'edit'):?>
<?php elseif($action == 'update'):?> 
<?php elseif($action == 'show'):?>
<?php elseif($action == 'delete'):?>
<?php else:?>
     <h1>404 Page not found</h1>               
<?php endif?>