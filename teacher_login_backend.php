<?php
if(isset($_POST['but']))
{
    $teacher_id=$_POST['NAME'];
    $pass=$_POST['PASSWORD'];
    
    $query="select * from teacher where teacher_id='$teacher_id' and password='$pass'";
    include 'connection.php';
    $result=mysqli_query($con, $query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['name']=$teacher_id;
        $_SESSION['password']=$pass;
        echo "<script>alert('Login successfull...')</script>";
        echo "<script>window.location.replace('teacher_profile.php')</script>";
    }
    else{
        echo "<script>alert('Login Unsuccessfull,,, Try Again...')</script>";
         echo "<script>window.location.replace('teacher_login page.php')</script>";
    }
    
}
else
{
    echo "<script>window.location.replace('login.php')</script>";
}

?>