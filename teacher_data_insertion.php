<?php
if(isset($_POST['sub']))
{
    session_start();
    $e=$_SESSION['NAME'];
    $f=$_SESSION['PASSWORD'];
$fid=$_POST['facid'];
$fnamee=$_POST['fname'];
$genderr=$_POST['genderr'];
$password=$_POST['password'];
$query="insert into teacher (teacher_id,teacher_name,teacher_gender,password) values('$fid','$fnamee','$genderr','$password')";
include 'Connection.php';
$result=mysqli_query($con,$query);


$all="select * from teacher";
$res=mysqli_query($con,$all);
echo "<table border=3 class='karthik'>";
echo "<tr> <th> tacehr_id </th> <th> teacher_name </th>  </tr>";
while($row=mysqli_fetch_array($res))
{
    echo "<tr>";
    echo "<td> ".$row ['teacher_id']."</td>";
     echo "<td>".$row['teacher_name']."</td>";
     echo "</tr>";
}

}

