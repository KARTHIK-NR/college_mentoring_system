<?php
if(isset($_POST['but']))
{
    $email=$_POST['NAME'];
    $password=$_POST['PASSWORD'];
    $select=$_POST['teach'];


    if($select=='hod')
    
    {
    
      $query="select * from hod where NAME='$email' and PASSWORD='$password'";
      
    }
    elseif($select=='admin') 
    {
     
        $query="select * from admin where name='$email' and password='$password'";
    }
     
     else
     {
     
        $query="select * from teacher where teacher_id='$email' and password='$password'";
     }
    
    

    include 'connection.php';
    $result=mysqli_query($con, $query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        if($select=='hod')
        {
        
        $_SESSION['NAME']=$email;
        $_SESSION['PASSWORD']=$password;
        echo "<script>alert('Login successfull...')</script>";
        echo "<script>window.location.replace('hod_profile_page.php')</script>";
        }
        else if($select=='admin') 
        {

        $_SESSION['NAME']=$email;
        $_SESSION['PASSWORD']=$password;
        echo "<script>alert('Login successfull...')</script>";
        echo "<script>window.location.replace('adminfrontpage.php')</script>";

        }
        else
        {

            $_SESSION['NAME']=$email;
            $_SESSION['PASSWORD']=$password;
            echo "<script>alert('Login successfull...')</script>";
            echo "<script>window.location.replace('teacher_profile.php')</script>";
    
        }

    }
    else{
        echo "<script>alert('Login Unsuccessfull,,, Try Again...')</script>";
         echo "<script>window.location.replace('login.php')</script>";
    }
    
}
else
{
    echo "<script>alert('you enter the wrong data')</script>";
    echo "<script>window.location.replace('login.php')</script>";
}

?>