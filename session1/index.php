<?php 
  $username = 'Pierre';
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
    <!-- easy way-->
    <?php  if($username == 'AMIT'):?>
          <h1>Hello Admin</h1> 
    <?php else:?>
        <h1>Hello <?php echo $username?></h1>
    <?php endif?>
</body>
</html>
