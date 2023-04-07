<html>

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body style="background-color:#c7ddcc;">

<form class="form-horizontal" action="" method="POST">
<fieldset>

<!-- Form Name -->
<legend align="center"  style="color:DodgerBlue"><h2><b>MAHARAJA INSTITUTE OF TECHNOLOGY MYSORE</b></h2></legend>
<marquee scrollamount="5" colo><h3 style="color:Tomato;"><b>DEPARTMENT OF MCA </b></h3></marquee>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">USN</label>  
  <div class="col-md-4">
  <input id="textinput" name="USN" type="text" placeholder="USN" class="form-control input-md">
  <span id="id" style="display:none;color:red" > INVALID USN </span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="but" class="btn btn-primary">SUBMIT</button>
  </div>
</div>
</fieldset>
</form>
</body>
</html>

<?php
if(isset($_POST['but']))
{
    $usn=$_POST['USN'];
    $con = mysqli_connect("localhost","root","","mentoring");
     $a="select * from student_data where usn='$usn'";
  
   $res=mysqli_query($con,$a);
   if(mysqli_num_rows($res)==1)
   {
     echo"<br>"; 
  
     echo "<table border=3 align='center'style=width:'50px' height;>";
     echo "<tr> <th> USN </th> <th> IA_marks1 </th> <th> IA_marks2 </th> <th> IA_marks3 </th> <th>semester_percentage</th><th> co curricular activities</th> <th> Suggestions </th> </tr>";
     while($row=mysqli_fetch_array($res))
     {
       echo "<tr>";
       echo "<td> ".$row ['usn']."</td>";
       echo "<td>".$row['IA_marks1']."</td>";
       echo "<td>".$row['IA_marks2']."</td>";
       echo "<td>".$row['IA_marks3']."</td>";
       echo "<td>".$row['semester_percentage']."</td>";
       echo "<td>".$row['cocurricular_activity']."</td>";
       echo "<td>".$row['sugesstion']."</td>";
       echo "</tr>";
     }
    }
    else{
      echo'<script>
      var R= getdocumentById
      </script>';
    }
}






