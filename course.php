<?php
session_start();
include '../../connection.php';
$count=0;$id=0;
$pro=$_SESSION["uname"];
if(isset($_POST['REGISTER']))
{

	$cat=$_POST['cat'];
	$cname=$_POST['cname'];
	$ctype=$_POST['ctype'];
	$fee=$_POST['fee'];
	$duration=$_POST['duration'];
	$result1=mysqli_query($con,"select course_name from tbl_course where course_name='$cname'");
	if($row=mysqli_fetch_assoc($result1))
	{
			echo("Course already exist");
	}
	else
	{
				$result=mysqli_query($con,"select count(*) from tbl_course");
				if($row=mysqli_fetch_assoc($result))
				{
					$count=$row['count(*)'];
					$count=$count+1;
					$id="c".$count;
				}
				//echo "insert into tbl_course(course_id,pro_id,cat_id,course_name,course_type,course_fee,duration) values('$id','$pro','$cat','$cname','$ctype','$fee','$duration')";
				//die();
				$result=mysqli_query($con,"insert into tbl_course(course_id,pro_id,cat_id,course_name,course_type,course_fee,duration) values('$id','$pro','$cat','$cname','$ctype','$fee','$duration')");
               //echo "insert into tbl_courseprovider(pro_id,pro_name,inst_name,starting_date,license_no,country_id,State_id,district_id,place,city,street,pin,email_id,contact_no,Awards,demo_video)
				//values('$id','$uname','$inst','$dos','$lice','$cname','$sname','$dname','$home','$place','$street','$pin','$email','$phone','$awards','$demo')";
			  header("Location:courseview.php");



	}
}


?>
