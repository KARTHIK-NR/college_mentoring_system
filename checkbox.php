
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<legend align="center"  style="color:DodgerBlue"><h2><b>MAHARAJA INSTITUTE OF TECHNOLOGY MYSORE</b></h2></legend>
<marquee scrollamount="5" colo><h3 style="color:Tomato;"><b>DEPARTMENT OF MCA </b></h3></marquee>

<body style="background-color:#c7ddcc;">
<form action="" method="POST">
<?php
$mysqli = new mysqli('localhost','root','','mentoring');
$resultset=$mysqli->query("select teacher_id,teacher_name from teacher");
?>

<table border="3px " align="center" style="width:'30px' height='50px'">
    <th>
<select name="teacherid">
    <?php
    while($row=$resultset->fetch_assoc())
    {
        // echo $row['teacher_id']."<br>";
        // echo $row['teacher_name']."<br>";
        $teacher_name=$row['teacher_name'];
        $teacher_id=$row['teacher_id'];
        echo "<option value='$teacher_id'>$teacher_id</option>";
    }
    ?>
    </select>
</th>

     <th> usn </th>  
<?php
$mysqli = new mysqli('localhost','root','','mentoring');
$resultset=$mysqli->query("select * from student where teacher_id IS  NULL");

    while($row=$resultset->fetch_assoc())
    { 
    ?>
    <tr>
        <td>
    <input type="checkbox" name="idd[]" value="<?=$row['usn'];?>"> <td><?= $row['usn'];?><t/td>
</td>

    </tr>

<?php
    }?>
    </table>
    <br>
    <br>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="sum" class="btn btn-primary">submit</button>
  </div>
</div>  
</form>
<?php
if(isset($_POST['sum']))
{
$s=$_POST['teacherid'];
// echo $s;
echo "<br>";
$e=$_POST['idd'];
$extract_id=implode(',',$e);
$f=$extract_id;
foreach($e as $i)
{
    echo $i;
$q="update student set teacher_id ='$s' where usn ='$i'";
include 'Connection.php';
$r=mysqli_query($con,$q);
if($r)
{
    echo "alert(' student data uploarded sucessfully')";
    echo"<script>window.location.replace('checkbox.php')</script>";
}
else
{
    echo "unsucess<br>";
}
}
}
?>
</body>
    
     