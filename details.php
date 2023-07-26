<?php 
session_start();
if(!isset($_SESSION['rollno'])){
  header("Location: login-signup.html");
}
include "server.php";
$email=$_SESSION['email'];
$sql="select Name, Email, Password, MobileNumber from register WHERE Email='$email'";
if(mysqli_num_rows($result)>0){
    
    while($row=mysqli_fetch_assoc($result)){
        echo $row["Name"]."<br>" .$row["Email"]."<br>". $row["Password"]."<br>". $row["MobileNumber"];
    }

}
?>
<html>
    <head>
        <title>Login_PHP</title>
    <head>
<body>
</body>
</html>