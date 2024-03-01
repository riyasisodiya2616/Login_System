<?php
session_start();
header('location:index.php');

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $user, $password, $dbname);

 mysqli_select_db($conn, 'test');

 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 $sql = "select * from user where username = '$username'";
 $result = mysqli_query($conn, $sql);
 $num = mysqli_num_rows($result);

 if($num == 1 ){
    echo "username Already taken";
 }
 else{
    $reg = "insert into user(username,email, password) values ('$username','$email','$password')";
    mysqli_query($conn, $reg);
    echo "registration successful";
}

?>