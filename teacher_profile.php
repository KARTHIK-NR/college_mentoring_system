<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<legend align="center"  style="color:DodgerBlue"><h2><b>MAHARAJA INSTITUTE OF TECHNOLOGY MYSORE</b></h2></legend>
<marquee scrollamount="5" colo><h3 style="color:Tomato;"><b>DEPARTMENT OF MCA </b></h3></marquee>

<form method="post" action="student_data_insertion.php">

<?php
session_start();
$e=$_SESSION['NAME'];
$f=$_SESSION['PASSWORD'];
echo "$e";
$own="select s.usn,s.name,s.address,s.branch,s.semester,s.teacher_id from student s,teacher t where s.teacher_id=t.teacher_id and s.teacher_id='$e'";
include 'Connection.php';
$result=mysqli_query($con,$own);
echo"<br>";
echo "<table border=3 class='karthi'>";
echo "<tr> <th> usn </th> <th> name </th> <th> address </th> <th> branch </th> <th> semester </th><th>teacher</th> </tr>";
while($row=mysqli_fetch_array($result))
{
    echo "
    <tr class='data'>
    <td>".$row['usn']."</td>
    
     <td>".$row['name']."</td>
    <td>".$row['address']."</td>
    <td>". $row['branch']."</td>
    <td>". $row['semester']."</td>
    <td>". $row['teacher_id']."</td>
    <td><button type='submit' id='b1' name='b1[]' value='".$row['usn'] ."'>Click Here</button></td>
        </tr>";

}

echo "</table>";

?>
</form>
    </body>
</html>