<?php
session_start();
$e=$_SESSION['NAME'];
$f=$_SESSION['PASSWORD'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<!-- <?php echo"<label  class='col-md-4 control-label' for='Username'> USER "  .$e."</label> " ; ?>  -->
<body style="background-color:#c7ddcc;">


<form align = "Left" class="form-horizontal" method="POST" action="">
<fieldset>

<!-- Form Name -->

<legend align = "center" >ADD TEACHERS AND STUDENTS </legend>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="faculty" class="btn btn-primary">Add Facultity</button>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="student" class="btn btn-primary">Add Students</button>
  </div>
</div>

</fieldset>
</form>
<?php
if(isset($_POST['student']))
{
    echo "<script> window.location.replace('studentdata.php')</script>";
}
if(isset($_POST['faculty']))
{
  echo "<script> window.location.replace('teacher_registrationform.php')</script>";
}

include 'Connection.php';

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

include 'Connection.php';



$all="select * from student where teacher_id IS  NULL";
$res=mysqli_query($con,$all);
echo "<table border=3 class='karthik'>";
echo "<tr> <th> USN </th> <th> Student </th>  </tr>";
while($row=mysqli_fetch_array($res))
{
    echo "<tr>";
    echo "<td> ".$row ['usn']."</td>";
     echo "<td>".$row['name']."</td>";
     echo "</tr>";
}









?>
</body>
</html>
