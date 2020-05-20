<?php
session_start();
require('db.php');
if(isset($_SESSION['uid']))
{ $id= $_SESSION['uid'];
	$con= getConnection();
	$sql="select  * from users where id='{$id}'";
	$result= mysqli_query($con,$sql);
	$data= mysqli_fetch_assoc($result);
	
?>

<html>
<body>
<form>


<?php
if($data['type']== "Student")
{
?>
<table cellspacing="50" align="center" >
	<h1 align="center" style="background-color:GreenYellow;" >Student Portal </h1><br><br><br>
	Welcome <?php echo $data['name'];?> ! <br>

    <tr>
    	<td><img src="3.png"></td>
    	<td><img src="7.png"></td>
    	<td><img src="2.png"></td>
    	<td><img src="4.png"></td>
    	<td><img src="6.png"></td>
    	<td><img src="5.png"></td>
    
    
    </tr>
    
	<tr align="center">
			
	<td ><a href="Profile.php" style="color:MediumSeaGreen;" align="center"><b>Profile </b></a></td>
	<td ><a href="changepass.html" style="color:Tomato;" align="center"><b> Change Password </b></a></td>
	<td ><a href="ViewUsers.php" style="color:MediumSeaGreen;" align="center"><b>View Students</b> </a></td>
	<td><a href="Exam.php" style="color:Tomato;" align="center"><b> Exam</b></a></td>
	
	<td ><a href="Notes.php" style="color:MediumSeaGreen;" align="center"><b>Notes</b> </a></td>
	<td><a href="logout.php" style="color:Tomato;" align="center"><b>Logout</b></a></td>
				
	</tr>
</table><br><br><br><br><br><br>

<?php
}
?>
<a href="logout.php"> logout </a>

<?php
}
?>

</form>
</body>
</html>