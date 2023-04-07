<form method="POST" action="">
<input type="password" name="pass" >
<button name="btn">Button</button>
</form>
<?php

if(isset($_POST['btn']))
{
    session_start();
    $name=$_SESSION['NAME'];
    $password=$_SESSION['PASSWORD'];
    $pass=$_POST['pass'];
    $query="update hod set PASSWORD='$pass' where NAME='$name'";
    include 'connection.php';
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script> alert('password changed sucssfuly')</script>";
                echo "<script> window.location.replace('login.php') </script>";
    }
    else
    {
        echo "unsucess";
    }

}
    ?>