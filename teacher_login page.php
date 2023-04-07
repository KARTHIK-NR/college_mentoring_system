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

<div class="container">

<form class="form-horizontal" method="POST" action="teacher_login_backend.php">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Username">USER NAME</label>  
  <div class="col-md-4">
  <input id="Username" name="NAME" type="text" placeholder="ENTER YOUR ID" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">PASSWORD</label>
  <div class="col-md-4">
    <input id="password" name="PASSWORD" type="password" placeholder="ENTER YOUR PASSWORD" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">SUBMIT</label>
  <div class="col-md-4">
    <button id="singlebutton" name="but" class="btn btn-primary">Button</button>
  </div>
</div>

</fieldset>
</form>
</body>
</html>
