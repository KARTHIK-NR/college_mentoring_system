<?php
if(isset($_POST['submit']))
{
$usn=$_POST['usn'];
$name=$_POST['name'];
$address=$_POST['address'];
$branch=$_POST['branch'];
$semester=$_POST['sem'];
$query="insert into student (usn,name,address,branch,semester) values('$usn','$name','$address','$branch','$semester')";
include 'Connection.php';
$result=mysqli_query($con,$query);
if($result)
{
    session_start();
    $e=$_SESSION['adminid'];
    $f=$_SESSION['password'];
    echo "<script>alert('data inserted sucessfully')</script>";
   echo "<script> window.location.replace('studentdata.php')</script>";
}
}
else if(isset($_POST['reset']))
{
    echo "<script> window.location.replace('studentdata.php')</script>";
    
}
else
{
    echo "<script> window.loaction.replace('login_page.php')";
}
?>
<?php
