<?php
session_start();
$pro=$_SESSION["uname"];
include 'header.php';
include '../connection.php';
?>


<h3>New Learners</h3>
<br>
<table class="table table-bordered">
<th>Name</th><th>Email</th><th>phone</th><th>ID</th><th>Institution/Company</th>
<?php
$result = mysqli_query($con,"select tbl_course.*,learning.*,tbl_learner.*");

 while($row=mysqli_fetch_assoc($result))
 {

 echo "<tr><td>".$row['Username']."</td><td>".$row['email_id']."</td><td>".$row['contact_no']."</td><td>".$row['user_id'].'</td><td>'.$row['institution'].'</td></tr>';


 }



?>
</table>
<?php

include 'footer.php';

?>
