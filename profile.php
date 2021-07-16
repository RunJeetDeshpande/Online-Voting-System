<?php 
include "header_voter.php";


if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "connection.php";
?>
<body bgcolor="#EBE9E9" background="bg1.jpg">

<center><h2> <u>Welcome <?php echo $_SESSION['SESS_NAME']; ?> </u>
<br>
<br>
<br>
<?php
$username = $_SESSION['SESS_NAME'];
$query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT voted from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
$row = mysqli_fetch_assoc($sql);
        echo "You have voted for: " . " " . $row['voted'];
    } else {
        echo "You have not voted yet. Please submit your vote!";
    }
}
?></h2>
</center>
</body>