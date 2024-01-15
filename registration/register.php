<?php 
$db= "hamza";
$host = "localhost";
$user = "root";
$password = "";
$connection  = mysqli_connect($host,$user,$password,$db);

if($connection)
{
    echo "Connection Successful";
}
else
{
    die("connection failed");
}

if(isset($_POST['btn']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $query = "INSERT into reg_form (fname,lname,contact,email,password) VALUES ('$fname','$lname','$contact','$email','$pwd')";

if ($connection->query($query) === TRUE) {
    echo '<script>
    window.location.href = "Login_reg.php";
    </script>';
}
else
{
    echo "Not Inserted";
}
}
?>