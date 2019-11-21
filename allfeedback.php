<?php

session_start();
$pid=$_SESSION["uname"];
include 'header.php';
include '../connection.php';
?>


<h3>New Feedbacks</h3>
<br>
<table class="table table-bordered">
<th>Course</th><th>User</th><th>Feedback</th>
<?php


$result = mysqli_query($con,"select feedback.*,tbl_course.* from feedback,tbl_course where tbl_course.course_id=feedback.cid and tbl_course.pro_id='$pid' order by id desc");

 while($row=mysqli_fetch_assoc($result))
 {
 echo "<tr><td>".$row['course_name']."</td><td>".$row['uid']."</td><td>".$row['feedback']."</td></tr>";



 }



?>
</table>
<?php

include 'footer.php';

?>
