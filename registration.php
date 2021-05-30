<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
   
</head>
<body>
<!-- <?php echo $_SESSION['status']; ?> -->
<!-- <?php error_reporting(E_ERROR | E_PARSE); ?> -->
    <div class="container">
        <div class="header">
            <h2>
                Register
            </h2>
        </div>
        <form action="registration.php" method="post">
            
            <div>
                <label for="username">Username :</label>
                <input type="text" name="username"required id="username">
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" name="email"required>
            </div>
            <div>
                <label for="password_1">Password :</label>
                <input type="password" name="password_1"required>
            </div>
            <div>
                <label for="password_2">Confirm Password:</label>
                <input type="password" name="password_2"required>
            </div>
            <button type="submit" id="btn" name="reg_user" )>submit</button>

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