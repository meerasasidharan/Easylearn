<?php
session_start();
include '../../connection.php';
$count=0;$id=0;
$pro=$_SESSION["user"];
if(isset($_POST['REGISTER']))
{
	
	$cat=$_POST['cname'];
	$result1=mysql_query("select cat_name from tbl_coursecategory where cat_name='$cat'");
	if($row=mysql_fetch_assoc($result1))
	{
			echo("Category already exist");
	}
	else
	{
				$result=mysql_query("select count(*) from tbl_coursecategory",$con);
				if($row=mysql_fetch_assoc($result))
				{
					$count=$row['count(*)'];
					$count=$count+1;
					$id="ca".$count;
				}
				//echo "insert into tbl_course(course_id,pro_id,cat_id,course_name,course_type,course_fee,duration) values('$id','$pro','$cname','$ctype','$fee','$duration')";
				//die();
				$result=mysql_query("insert into tbl_coursecategory(cat_id,cat_name) values('$id','$cat')",$con);
               //echo "insert into tbl_courseprovider(pro_id,pro_name,inst_name,starting_date,license_no,country_id,State_id,district_id,place,city,street,pin,email_id,contact_no,Awards,demo_video) 
				//values('$id','$uname','$inst','$dos','$lice','$cname','$sname','$dname','$home','$place','$street','$pin','$email','$phone','$awards','$demo')";
			  
			
			
	

	}
}


?>