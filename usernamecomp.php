<?php
$db=mysqli_connect('localhost','root','','users') or die("could not connect to database");
$username = $_POST['username'];
$query = "SELECT username FROM userdetails WHERE username='$username'";

$result = mysqli_query($db,$query);

if(mysqli_num_rows($result) > 0){
    echo 1;
}else{
    echo 0;
}
?>