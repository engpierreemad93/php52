<?php 
if(isset($_POST['username'])){
    echo $_POST['username'] ;
    echo $_POST['password'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.php">
        <input type="text" placeholder="insert your username" name="username">
        <input type="password" placeholder="insert your password" name="password">
        <input type="submit">
    </form>
</body>
</html>