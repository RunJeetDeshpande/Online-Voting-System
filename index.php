<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>

<br>
<br>
	<center>
	<img src="indexbg.jpg" width="450Px">
	</center>
	
	
<?php include "footer.php";?>
