<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <img align="center" src="images.jfif" alt="Flowers in Chania" style="width:80px;height:80px;margin-right: 150px;margin-left: 650px" >
</head>
<body> 
<?php
session_start();

$e=$_SESSION['NAME'];
include 'connection.php';
if(isset($_POST['b1']))
{
$b=$_POST['b1'];
$i=$b[0];
//print_r($_POST['b1']);

}
?>
<form class="form-horizontal" method="POST" action="">
<fieldset>

<!-- Form Name -->
<legend align="center"  style="color:DodgerBlue"><h2><b>MAHARAJA INSTITUTE OF TECHNOLOGY MYSORE</b></h2></legend>
<marquee scrollamount="5" colo><h3 style="color:Tomato;"><b>DEPARTMENT OF CS </b></h3></marquee>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">usn</label>  
  <div class="col-md-4">
<input id="textinput" name="usn" type="text" placeholder="university seat number" class="form-control input-md" value="<?php echo $i?>" readonly >    
  </div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">IA marks 1</label>
  <div class="col-md-4">
    <input id="passwordinput" name="ia1" type="text" placeholder="enter the marks of I st IA" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">IA marks 2</label>  
  <div class="col-md-4">
  <input id="textinput" name="ia2" type="text" placeholder="enter the marks of II IA " class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">IA marks 3</label>  
  <div class="col-md-4">
  <input id="textinput" name="ia3" type="text" placeholder="enter the III IA marks " class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">total percentage of sem</label>  
  <div class="col-md-4">
  <input id="textinput" name="semmarks" type="text" placeholder="enter the semester percentage" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Co-curricular activities</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="cocur"></textarea>
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Suggestion</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="suggest"></textarea>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="but" class="btn btn-primary">submit</button>
  </div>
</div>

</fieldset>
</form>
</body>
</html>
 <?php
 if(isset($_POST['but']))
{
    $usn=$_POST['usn'];
    $q="select usn from student_data where usn='$usn'";
    'include Connection.php';
    $res=mysqli_query($con,$q);
    if(mysqli_num_rows($res)!=1)
{
    $iamarks1=$_POST['ia1'];
    $iamarks2=$_POST['ia2'];
    $iamarks3=$_POST['ia3'];
    $semmarks=$_POST['semmarks'];
    $cocurricular=$_POST['cocur'];
    $sugesstion=$_POST['suggest'];
    $query="insert into student_data(usn,IA_marks1,IA_marks2,IA_marks3,semester_percentage,cocurricular_activity,sugesstion)values('$usn','$iamarks1','$iamarks2','$iamarks3','$semmarks','$cocurricular','$sugesstion');";
'include Connection.php';
$result=mysqli_query($con,$query);
if($result==1)
{
    echo "sucess";
}
else
{
    echo "unsuscess";

}
}
else
{
    echo "<script> alert('data is already inserted')</script>";
    echo "<script>window.location.replace('student_data_insertion.php')<Script>";
}
}

 ?>  