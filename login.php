<html lang="en">
<head>
  
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <img align="center" src="images.jfif" alt="Flowers in Chania" style="width:80px;height:80px;margin-right: 150px;margin-left: 650px">
</head>
<body style="background-color:#c7ddcc;">


<div class="container">

<form class="form-horizontal" method="POST" action="save.php">
<fieldset>


<legend align="center"  style="color:DodgerBlue"><h2><b>MAHARAJA INSTITUTE OF TECHNOLOGY MYSORE</b></h2></legend>
<marquee scrollamount="5" colo><h3 style="color:Tomato;"><b>DEPARTMENT OF CS </b></h3></marquee>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Username">USER NAME</label>  
  <div class="col-md-4">
  <input id="Username" name="NAME" type="text" placeholder="ENTER YOUR EMAIL" class="form-control input-md" require>
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">PASSWORD</label>
  <div class="col-md-4">
    <input id="password" name="PASSWORD" type="password" placeholder="ENTER YOUR PASSWORD" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="password">PASSWORD</label>
<div class="col-md-4">
<select name="teach" id="tid">
  <option value="hod">HOD</option>
  <option value="admin">ADMIN</option>
  <option value="staff">STAFF</option>
  
</select>
</div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="but" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
</body>
</html>
