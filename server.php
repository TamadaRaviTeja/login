<html>
    <head>
        <title>Server_PHP</title>
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
<h1>
<?php
$server="localhost";
$username="root";
$password="";
$database_name="login_signup";

$conn=mysqli_connect($server,$username,$password,$database_name);

if(!$conn){
    echo "Connection failed".mysqli_connect_error();
    exit;
}


?>
</h1>