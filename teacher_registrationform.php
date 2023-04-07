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
<body style="background-color:#c7ddcc;">


<form class="form-horizontal" method="post" action="teacher_data_insertion.php">
<fieldset>

<!-- Form Name -->
<legend> </legend>
<marquee scrollamount="5" colo><h3 style="color:Tomato;">DEPARTMENT OF MCA </h3></marquee>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Facultity_id</label>  
  <div class="col-md-4">
  <input id="textinput" name="facid" type="text" placeholder="enter your id" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="faulty">faculty Name</label>  
  <div class="col-md-4">
  <input id="faulty" name="fname" type="text" placeholder="enter the faculty name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="genderr">gender</label>
  <div class="col-md-4">
    <select id="genderr" name="genderr" class="form-control">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
  </div>
</div>
    <!-- Text input-->
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">passwoed</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required="">
    
  </div>
</div>

    <br>
    <br>
    <!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="sub"></label>
  <div class="col-md-4">
    <button id="sub" name="sub" class="btn btn-primary">submit</button>
  </div>
</div>
  </div>
</div>

</fieldset>
</form>
</body>
</html>