<?php
session_start();
include '../connection.php';
if(isset($_POST['Submit']))
{

	$chaptername=$_POST['chname'];
	$duration=$_POST['dura'];
	$desc=$_POST['desc'];

	$video=$_POST['vfile'];
	$audio=$_POST['afile'];
	//$cid="c1";
	$cid=$_SESSION["cid"];
	$result1=mysqli_query($con,"select chapter_name from tbl_chapter where chapter_name='$chaptername'");
	if($row=mysqli_fetch_assoc($result1))
	{

			echo("chapter is already exist");

	}
	 else
	 {
		 $result=mysqli_query($con,"select count(*) from tbl_chapter");
				if($row=mysqli_fetch_assoc($result))
				{
					$count=$row['count(*)'];
					$count=$count+1;
					$id="cha".$count;
				}
		 $result1=mysqli_query($con,"insert into tbl_chapter values('$id','$cid','$chaptername','$duration','$video','$audio','$desc')");
		header('location:courseview.php');

		 				//echo mysqli_error($con);


	 }




}

?>
