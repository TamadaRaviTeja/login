<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <style>
        body{
            margin:0;
            padding:0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: rgb(124, 124, 205);
        }
        .container{
            width:100%;
            height:100vh;
            display:flex;
            align-items: center;
            justify-content: center;
        }
        .btn1{
            width:200px;
            height:50px;
            background-color: rgb(48, 238, 67);
            border-radius:10px; 
            border:none;
            font-size: medium;
            cursor:pointer;
            color:white;
            margin-top:50px;
         }
        .popup{
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            width:350px;
            height:300px;
            background-color: aliceblue;
            text-align:center;
            border-radius: 7px;
        }
        
        .popup img{
            width:100px;
            height:100px;
            margin-top:-50px;
        }
        
         .btn1:hover{
            background-color:rgb(47, 48, 47,0.8);
         }
    </style>
</head>
<body>
    <div class="container">
       <div class="popup" id="popup">
            <img src="img.png">
            <h2>Thank You</h2>
            <h4>You havw Registered successfully</h4>
            <button type="button" class="btn1" onclick="closepopup()">Close</button>
        </div>
    </div>
    <script>
        function closepopup(){
            window.open("login-signup.html")
            document.getElementById(compiler).style.display="block";
        }
    </script>
    
</body>
</html>