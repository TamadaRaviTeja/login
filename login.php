<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login_PHP</title>
        <style>  
        body{
            margin:0;
            padding: 0;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-image: url("back.jpg");
            background-repeat: no-repeat;
            background-size:cover;
        }
        .design{
            width:400px;
            height:400px;
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            border-radius:10px;
            transition:transform 0.4s, 0.5s;
            box-shadow: 3px 3px 3px  white;
            background-image:url("back1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            color:white;
            font-size:20px;
             line-height:45px;
             padding-left:10px;
    }
        .des1{
                color:gold;
                font-size: 30px;
                text-align: center;
         }
        
        </style>
    </head>
<body>
<div class="design">
    <p class="des1">Personal Details</p>
<?php 

include "server.php";

$email=$_POST["email"];
$password=$_POST["password"];
$sql="SELECT Name, Email, Password, MobileNumber FROM `register` WHERE Email='$email' and Password='$password'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo " Name is :".$row["Name"]."<br>".
             " Mail is :".$row["Email"]."<br>".
             " Password is :".$row["Password"]."<br>".
             " MobileNumber :".$row["MobileNumber"]."<br>";
        }
}
    else{
        echo "Email or password is incorrrect";

}


?>
</div>
</body>
</html>
