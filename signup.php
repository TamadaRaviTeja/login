<html>
    <head>
        <title>Login_PHP</title>
        <style>  
        h1{
                position: absolute;
                top:50%;
                left:50%;
                transform: translate(-50%,-50%);
                font-size: 15px;
                color:coral;
            }
        </style>
    </head>
</html>
<h1>
<?php 
include "server.php";
$sname=$_POST["sname"];
$number=$_POST["number"];
$email=$_POST["email"];
$password=$_POST["password"];

$sql = "INSERT INTO `register` (`Name`, `Email`, `Password`, `MobileNumber`) VALUES ('$sname', '$email', '$password', '$number');";
$result=mysqli_query($conn,$sql);
if(!$result){
     "Error While subbmitting the details".mysqli_error($reslut);
    exit;
}
else {
    header("Location:success.php");
}

?>
</h1>
