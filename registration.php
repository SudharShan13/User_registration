<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="main.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
   
</head>
<body>
<!-- <?php echo $_SESSION['status']; ?> -->
<!-- <?php error_reporting(E_ERROR | E_PARSE); ?> -->
    <div class="container">
        <form action="registration.php" method="post">
            <p class="login-text" style="font-size: 2rem; font: weight 800px;">Register</p>
            <div class="form-group">
                <input class="form-control" type="text" name="username" required id="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email"required placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password_1"required placeholder="Password">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password_2"required placeholder="Confirm Password">
            </div>
            <div class="form-group">
            <button class="btn btn-primary" type="submit" id="btn" name="reg_user" )>submit</button>
            </div>
            <p>Already a user?<a href="login.php"><b>LogIn</b></a></p>
        </form>
    </div>
    <script>
        $("#username").on("change", function () {
            console.log($(this).val());
            $.ajax({
                type: "POST",
                dataType: "json",
                data: {username : $(this).val()},
                url: 'usernamecomp.php',
                success: function(data) {
                if(data){
                    console.log(data);
                    alert("UserRegistered");
                }
                
                }
            });
        });
    </script>
</body>
</html>