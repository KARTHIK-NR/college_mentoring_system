
<legend align="center"  style="color:DodgerBlue"><h2><b>MAHARAJA INSTITUTE OF TECHNOLOGY MYSORE</b></h2></legend>
<marquee scrollamount="5" colo><h3 style="color:Tomato;"><b>DEPARTMENT OF MCA </b></h3></marquee>

<?php
session_start();
$e=$_SESSION['NAME'];
$f=$_SESSION['PASSWORD'];

echo "$e"."<br>";
?>
<br>
<br>




<a align="" href="hodforget_password.php"> change password </a>
<br>
<br>
<?php
$own="select * from student";
include 'Connection.php';
$result=mysqli_query($con,$own);
echo "<table border=3 class='karthi'style='bground-color:gray;'>";
echo "<tr> <th> usn </th> <th> name </th> <th> address </th> <th> branch </th> <th> semester </th><th>teacher</th> </tr>";
while($row=mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td> ".$row ['usn']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>". $row['branch']."</td>";
    echo "<td>". $row['semester']."</td>";
    echo "<td>". $row['teacher_id']."</td>";
    echo "</tr>";

}

echo "</table>";


?>
<br>
<br>
<botton><a href="checkbox.php">click to add </a></botton>
<br>
<br>
<body style="background-color:#c7ddcc;">
<!-- Button -->
<form action="" method="POST">
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="button" name="logout" class="btn btn-primary">Logout</button>
  </div>
</div>

</fieldset>
</form>
</body>
<?php
if(isset($_POST['logout']))
{
    session_unset();
    echo "<script>window.location.replace('login.php')</script>";
}
?>
