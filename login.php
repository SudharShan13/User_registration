<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body>
    <div class="container">
        <form class="login-email" action="login.php" method="post">
        <p class="login-text" style="font-size: 2rem; font: weight 800px;">Login</p>
            <div class="form-group">
                <input class="form-control" type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password_1" placeholder="Password" required>
            </div>
            <button class="btn btn-primary" type="submit" name="login_user">submit</button>
            
            <p class="login-register-text">Not a user?<a href="registration.php">Register Here</a></p>
        </form>
    </div>
</body>
</html>