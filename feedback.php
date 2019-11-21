<?php include 'header.php'; ?>
<form action="#" method="post">
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1 align="center">Add Notifications</h1></td>
</tr><center>

<table border='0' width='480px' align='center'>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Notification Content:</b></td>
    <td><input type='text' name='cname' required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>



<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    <td align='center'><b><input type='submit' name='REGISTER' value="Add Notification"></b></td>
</tr>
</table>
</table>
</table>
</form>
</body>
</html>



<?php
include '../connection.php';
if(isset($_POST['REGISTER']))
{

	$cat=$_POST['cname'];

				$result=mysqli_query($con,"insert into notification(notification) values('$cat')");

}
include 'footer.php';

?>
