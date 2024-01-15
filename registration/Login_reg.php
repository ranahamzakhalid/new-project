<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        form {
         border-style: solid;
         border: 2px solid rgb(73, 58, 58);
         padding: 10px;
         border-radius: 15px;
         width: fit-content;
         text-align: justify;
         align-content: center;
         margin: 100px 500px 300px 500px;
         background-color: rgb(98, 124, 124);
        }
        .button
        {
            width: 100%;
            background-color:white;
            border-radius: 15px;
            border: 1px blue;
            padding: 2px;
            font-size: 14px;
            cursor: pointer;
        }
       </style>
</head>
<body  bgcolor="gray" border="50px">
    <form align="center" action="Log.php" method="POST">
        <div>
           <Marquee style= "border-radius:25px; background-color:white;" scrollamount="10"direction="right">Welcome To Login Page</Marquee>
        </div>
    <div class="login-box">
        <h2 align="center">
           Login Form
        </h2>
    </div>
    <div class="input-box">
        <input type="email" placeholder="Enter Email" name="email" required/>
        <label>Email</label>
    </div>
    <br>
    <div class="input-box">
        <input type="password" placeholder="Enter password" name="password" required/>
        <label>password</label>
    </div>
    <br>
    <div>
        <input type="checkbox"/>Remember me
        <a href="#">Forget Password</a>
    </div>
    <br>
    <div  align="center">
    <div class="button">
        <input type="submit" value="Login" name="btn" class="button">
    </div>
    </div>
    <br>
    <div align="center">
        Don't have a account<a href="Index.php">Sign up</a>
    </div>
</body>
</html>