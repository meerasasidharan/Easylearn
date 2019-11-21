<?php
session_start();
$pid=$_SESSION["uname"];
include 'header.php';
include '../connection.php';
?>


<h3>New learning Additions</h3>
<br>
<table class="table table-bordered">
<th>Username</th><th>Course Name</th><th>Type</th><th>Fee</th><th>Duration</th><th>Joined on</th>
<?php

$result = mysqli_query($con,"select tbl_learner.*,tbl_course.*,learning.* from tbl_learner,tbl_course,learning where learning.cid=tbl_course.course_id and tbl_learner.email_id=learning.uid and tbl_course.pro_id='$pid'");

 while($row=mysqli_fetch_assoc($result))
 {

 echo "<tr><td>".$row['Username']."</td><td>".$row['course_name']."</td><td>".$row['course_type']."</td><td>".$row['course_fee'].'</td><td>'.$row['duration'].'</td><td>'.$row['date'].'</td></tr>';


 }



?>
</table>
<?php

include 'footer.php';

?>
