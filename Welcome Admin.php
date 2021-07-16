<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "Admin view.php"; 
?>
<body  background="bg1.jpg">	
<center>
<h1> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h1>