<?php
session_start();
$e=$_SESSION['NAME'];
$f=$_SESSION['PASSWORD'];
echo $e;
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
<body>


<form class="form-horizontal" method="POST" action="student_insertiondata.php">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">USN</label>  
  <div class="col-md-4">
  <input id="textinput" name="usn" type="text" placeholder="ENTER USN" class="form-control input-md" required="">
  <span class="help-block">USN NO</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="NAME">NAME</label>  
  <div class="col-md-4">
  <input id="NAME" name="name" type="text" placeholder="ENTER YOUR NAME" class="form-control input-md" required="">
  <span class="help-block">NAME AS PER THE VTU</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ADRESS">ADDRESS</label>  
  <div class="col-md-4">
  <textarea id="ADDRESS" name="address" type="text" placeholder="ENTER YOUR ADDRESS" class="form-control input-md" required="" rows="4" cols="40"></textarea>
  <span class="help-block">PERMENT ADDRESS</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="branch">BRANCH</label>  
  <div class="col-md-4">
  <input id="branch" name="branch" type="text" placeholder="BRANCH NAME" class="form-control input-md" required="">
  <span class="help-block">EX:MCA/MBA</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="SEMESTER">SEM</label>  
  <div class="col-md-4">
  <input id="SEMESTER" name="sem" type="text" placeholder="SEMESTER" class="form-control input-md" required="">
  </div>
  </div>
<center>      
<!-- Button (Double) -->
<div class="form-group">
    <div class="col-md-04">
    <button id="submit" name="submit" class="btn btn-primary">submit</button>
    <button id="reset" name="reset" class="btn btn-primary">reset</button>
  </div>
</div>
</center>
</fieldset>
</form>
</body>
</html>
