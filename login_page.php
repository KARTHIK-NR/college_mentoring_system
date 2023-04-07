<?php
if(isset($_POST['btt']))
{
    $id=$_POST['idd'];
    $password=$_POST['pass'];
    $query="select * from admin where adminid='$id' and password='$password'";
    include 'Connection.php';
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['adminid']=$id;
        $_SESSION['password']=$password;
        echo "<script> window.location.replace('adminfrontpage.php')</script>";

    }
    else
    {
        echo "unsuscess";
    }
}

?>