<?php
$mysqli = new mysqli('localhost','root','','mentoring');
$resultset=$mysqli->query("select teacher_id from teacher");
?>
<select name="teachernames">
    <?php
    while($row=$resultset->fetch_assoc())
    {
        // echo $row['teacher_id']."<br>";
        // echo $row['teacher_name']."<br>";
        $teacher_name=$row['teacher_name'];
        $teacher_id=$row['teacher_id'];
        echo "<option value='$teacher_name'>$teacher_id</option>";
    }
    ?>
    </select>