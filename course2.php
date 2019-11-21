<?php include 'header.php' ?>
<form action="course.php" method="post">
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1 align="center">Course Registration</h1></td>
</tr><center>

<table border='0' width='480px' align='center'>
<tr>
    <td align='center'><b>Category:</b></td>
    <td><select name='cat' required>
	<option disabled selected>--Select--</option>
	<?php
						     include '../connection.php';
						     $res=mysqli_query($con,"select * from tbl_coursecategory");
							 while($row = mysqli_fetch_assoc($res))
							 {
								 $cname=$row["cat_name"];
								 $cid=$row["cat_id"];
				 echo '<option value="'.$cid.'">'.$cname.'</option>';
							 }
						 ?>
	</td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Course Name:</b></td>
    <td><input type='text' name='cname' required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Course Type:</b></td>
    <td><select name='ctype' onchange="change()" required>
	<option value="" selected disabled>--Select--</option>
	<option value="Paid">Paid</option>
	<option value="Free">Free</option></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Fee</b></td>
    <td><input type='text' name='fee' required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>

<tr>
    <td align='center'><b>Duration</b></td>
	<td><input type='text' name='duration' required></td>
	<td>In Hours</td>
    </tr>
<tr> <td>&nbsp;</td> </tr>
<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    <td align='center'><b><input type='submit' name='REGISTER' value="REGISTER"></b></td>
</tr>
</table>
</table>
</table>
</form>
<?php include 'footer.php' ?>
