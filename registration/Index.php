
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
            border-radius: 15px;
            border: 1px blue;
            padding: 2px;
            font-size: 14px;
            cursor: pointer;
            background-color:while
        }
    </style>
</head>

<body  bgcolor="gray" border="50px">
    <form align="center" action="register.php" method="POST">
        <div>
           <Marquee style= "border-radius:25px; background-color:white;" scrollamount="10"direction="right">REGISTRATION</Marquee>
        </div>
    <div class="login-box">
        <h2 align="center">
            Registration Form
        </h2>
    </div>
    <div class="input-box">
        <input type="text" placeholder="Enter Name" name="fname" required/>
        <label>First name</label>
    </div>
    <br>
    <div class="input-box">
        <input type="text" placeholder="Enter Name" name="lname" required/>
        <label>Last name</label>
    </div> 
    <br>   
    <div class="input-box">
        <input type="email" placeholder="Enter Email" name="email" required/>
        <label>Email</label>   
    </div>
    <br>
    <div class="input-box">
        <input type="number" placeholder="Enter Number" name="contact" required/>
        <label>Contact</label>
    </div>
    <br>
    <div class="input-box">
        <input type="password" placeholder="Enter Password" name="pwd" required/>
        <label>Password</label>  
    </div>
    <br>
    <div align="center">
    <div class="button">
        <input type="submit" value="Register" name="btn" class="button">
    </div>
    </div>
    <br>
    <div align="center">
        Already have an Account<a href="Login_reg.php">Login</a>
    </div>
    
</form>
</body>
</html>