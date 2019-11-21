<?php include 'header.php' ?>
<form action="chapter.php" method="post">

<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1 align="center">Chapters</h1></td>
</tr><center>

<table border='0' width='480px' align='center'>

<tr> <td>&nbsp;</td> </tr>

<tr>
    <td align='center'><b>Chaptername:</b></td>
    <td><input type='text' name='chname'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>

<tr>
    <td align='center'><b>Duration:</b></td>
    <td><input type='text' name='dura'></td>
</tr>
<tr>
    <td align='center'><b>Description:</b></td>
    <td><input type='text' name='desc'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>




<tr>
    <td align='center'><b>Video:</b></td>
    <td><input type='file' name='vfile'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>

<tr>
    <td align='center'><b>Audio:</b></td>
    <td><input type='file' name='afile'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>

<tr>
    <td align='center'><b><input type='submit' name='Submit' value="Submit"></b></td>
</tr>




</table>
</form>
<?php include 'footer.php' ?>
