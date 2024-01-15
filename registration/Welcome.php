<?php 
session_start();
if($_SESSION['email'])
{
}
else
{
    header("Location: Login_reg.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Welcome</title>
    <style>
        .cont
        {
            padding: 0;
            text-align: center;
            margin: 200px 300px;
            color: blue;
        }
        .log
        {
            width :40%;
            margin : left 500px;
            font : 18px;
        }
</style>
</head>
<body>
     <div>
         <form>
             <div class="cont">
                <h1> Welcome To PHP Developement...</h1>
                 </div>
                 <div  align="center">
                    <a href ="wel.php">Logout</a>
                 </div>
             </div>
         </form>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>