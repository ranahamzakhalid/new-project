<?php 
$db= "hamza";
$host = "localhost";
$user = "root";
$password = "";
$connection  = mysqli_connect($host,$user,$password,$db);

if($connection){
    // echo "Connection Successful";
}else{
    die("connection failed");
}

if(isset($_POST['btn']))
{

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "Select email, password from reg_form";

    $result = $connection->query($query);

    if ($result->num_rows > 0 )
    {
        // output data of each row
        while($row = $result->fetch_assoc())
        {
            //echo "email: " . $row["email"]. " - password: " . $row["password"]. "<br>";

            if($email == $row["email"] && $password == $row["password"])
            {
                session_start();
                $_SESSION['email'] = $email;
                echo '<script>
                window.location.href = "Welcome.php";
                </script>';
            }
            else
            {
                echo '<script>
                window.location.href = "Welcome.php";
                </script>';
            }
        }
    }
    else
    {
        echo '<script>
        window.location.href = "Welcome.php";
        </script>';
    }

    /*if ($result=mysqli_query($connection, $query))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    printf("Result set has %d rows.\n",$rowcount);
    // Free result set
    mysqli_free_result($result);
    }

    if ($connection->query($query) === TRUE)
    {
        echo '<script>
        window.location.href = "Welcome.php";
        </script>';
    }
    else
    {
        echo "No Data Found";
    }*/
}

?>