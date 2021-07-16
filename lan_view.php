<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php";
?>
<center><h2> <u>Voting So Far</u></h2></center>
<?php

include "connection.php";

$member = mysqli_query($con, 'SELECT * FROM languages' );

if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
	echo '<center><font size="5px"><table style="border:1px solid black;width:50%"><tr bgcolor="#FF6600">
<td width="30px" height="50px" background="mnubg.jpg">ID</td>		
<td width="120px" background="mnubg.jpg">NAME OF PARTY</td>
<td width="140px"background="mnubg.jpg">LOGO</td>
<td width="50px"background="mnubg.jpg">VOTE</td>
</tr>';
while($mb=mysqli_fetch_object($member))
		{	
			$id=$mb->lan_id;
			$name=$mb->fullname;
			$LOGO=$mb->LOGO;
			$vote=$mb->votecount;
			echo '<tr bgcolor="#F1FFF4">';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td><img src="'.$LOGO.'" width="40px"></td>';
	echo '<td>'.$vote.'</td>';
	echo "</tr>";
		}
		echo'</table></font></center>';
	}
?>

<?php include "footer.php"; ?>