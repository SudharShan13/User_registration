<?php

session_start();
if(!isset($_SESSION['username'])){
    $_SESSION['msg'] = "You must login to view this page";
    header("location: login.php");

}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body>
     <?php  ?> 
    <h1>This is the homepage</h1>
    <?php
    if(isset($_SESSION['success'])) : ?>
    <div>
        <h3>
        <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);

        ?>
       </h3>
    </div>
    <?php endif ?>  
    <?php if(isset($_SESSION['username'])) : ?>
    <h3>Welcome <strong><?php echo $_SESSION['username'];?></strong></h3>
    <button><a href="index.php?logout=1">Logout</a></button>
    <?php endif ?>
</body>
</html>