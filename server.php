<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$username="";
$email="";

$error = array();

$db=mysqli_connect('localhost','root','','users') or die("could not connect to database");

$username=mysqli_real_escape_string($db,$_POST['username']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);



$user_check_query = "SELECT * FROM userdetails WHERE username = '$username' or email='$email' LIMIT 1";

$results = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($results);
if(isset($_POST['reg_user'])){
    if($user){
        if($user['username'] === $username){
            array_push($error,"Usernsme already exists");
        }
        if($user['email'] === $email){
            array_push($error,"Email already exists");
        }
    }

    $password  = md5($password_1);
    $query= "INSERT INTO  userdetails(username,email,password) VALUES ('$username','$email','$password')";

    mysqli_query($db,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";

    echo "logged in";

    header('location:index.php');
}

if(isset($_POST['login_user'])){
    $username=mysqli_real_escape_string($db,$_POST['username']);

    $password = mysqli_real_escape_string($db,$_POST['password_1']);
    // if(empty($username)){
    //     array_push($error,"Username is requires");
    // }
    // if(empty($password)){
    //     array_push($error,"Password is requires");
    // }
       
       
        $password = md5($password);
        $query = "SELECT * FROM userdetails WHERE username ='$username' AND password='$password'";
        $results = mysqli_query($db,$query);
        print_r($results);
        if(mysqli_num_rows($results) >0){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Logged in";
            //echo $_SESSION['username'];
            header('location: index.php');
        }
        else{
            array_push($error,"Wrong Entries");
        }
    
}
?>