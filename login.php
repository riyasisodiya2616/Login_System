<?php
session_start();


$servername = "localhost";
$user = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $user, $password, $dbname);

 mysqli_select_db($conn, 'test');

 $username = $_POST['username'];
 $password = $_POST['password'];

 $sql = "select * from user where username = '$username' && password = '$password'";
 $result = mysqli_query($conn, $sql);
 $num = mysqli_num_rows($result);

 if($num == 1 ){
    $_SESSION['username'] = $username;
    header('location:activate.php');
 }
 else{
   echo"<div class='main'>
   <h1>Invalid username or password try again</h1>
   <br>
   go back to login page 
   <a href = 'index.php'>login page </a>";
   
}

?>
