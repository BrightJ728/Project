<?php
session_start();
if(isset($_POST['submit'])){
    include '../database/connection.php';
$username=$_POST['username'];
$password =$_POST['password'];

$sql="SELECT * FROM users where username='$username' and password='$password'";
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
if($count >0){
    header("Location: ../dashboard.php"); 
    return true;
}
else
{
    header("Location: ../index.php"); 

}
}
?>