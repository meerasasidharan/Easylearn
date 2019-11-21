<?php

session_start();
//$pid=$_SESSION["pid"];
include 'header.php';
include '../connection.php';
$id = $_GET['id'];
$_SESSION['course']=$id;
?>


<h3>New Course Providers</h3>
<br>
<table class="table table-bordered">
  <a class="btn btn-success" href="chaptermain.php?id=<?php echo $id ?>">Add Chapter</a>
  <a class="btn btn-success" href="../exam/dash.php?id=0&id1=<?php echo $id ?>">Exam Panel</a>
<th>Chapter Name</th><th>Duration</th><th>ID</th>
<?php


$result = mysqli_query($con,"select * from tbl_chapter where course_id='$id'");

 while($row=mysqli_fetch_assoc($result))
 {

   echo "<tr><td>".$row['chapter_name']."</td><td>".$row['duration']."</td><td>".$row['chapter_id'].'</td><td><a class="btn btn-danger" href=remove.php?id='.$row["chapter_id"].'>Remove</a></td></tr>';



 }



?>
</table>
<?php

include 'footer.php';

?>
