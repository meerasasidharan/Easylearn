<?php

session_start();
$pid=$_SESSION["uname"];
include 'header.php';
include '../connection.php';
?>


<h3>My Course List</h3>
<br>
<table class="table table-bordered">
<th>Category</th><th>Course Name</th><th>Type</th><th>Fee</th><th>Duration</th>
<?php


$result = mysqli_query($con,"select * from tbl_course where pro_id='$pid'");

 while($row=mysqli_fetch_assoc($result))
 {
   $cid=$row['cat_id'];
   //echo $cid;
   //echo "";
   $result1 = mysqli_query($con,"select * from tbl_coursecategory where cat_id='$cid'");
   while($row1=mysqli_fetch_assoc($result1))
   {
     $catname=$row1['cat_name'];
   }


 echo "<tr><td>".$catname."</td><td>".$row['course_name']."</td><td>".$row['course_type']."</td><td>".$row['course_fee'].'</td><td>'.$row['duration'].'</td><td><a class="btn btn-success" href=chapterview.php?id='.$row["course_id"].'>View</a></td><td><a class="btn btn-danger" href=remove.php?id='.$row["course_id"].'>Remove</a></td></tr>';


 }



?>
</table>
<?php

include 'footer.php';

?>
