<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<body  background="bg1.jpg">	
<center>
<h1> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h1>
<h2>Make a Vote </h2>
</center>
<hr>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'><b> What is your favorite political party? </b><BR>
<hr>



<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "connection.php";

$member = mysqli_query($con, 'SELECT * FROM languages' );

if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
?>
<table>
<?php
	while($mb=mysqli_fetch_object($member))
		{	
			$fullname=$mb->fullname;
			$LOGO = $mb->LOGO;
			
				echo '<tr><td><input type="radio" name="lan" value="'.$fullname.'"></td><td>'.$fullname.'</td><td><IMG SRC="'.$LOGO.'" WIDTH="45PX"></td></tr>';
		}

		?>

		</table>
		<?php
	}
?>


</font></center>

<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<hr>
<center><input type="submit" value="Submit Vote" name="submit" class="btn btn-success"/></center>
</form>
<?php include "footer.php"; ?></body>
