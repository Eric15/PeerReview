<?php
if(isset($_POST['submit'])){
    $dbHost = "PeerAppraiser.db.10804303.hostedresource.com";        //Location Of Database usually its localhost
    $dbUser = "PeerAppraiser";            //Database User Name
    $dbPass = "P33r@pprais3r";            //Database Password
    $dbDatabase = "PeerAppraiser";    //Database Name
    
    $db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database.");
    //Connect to the database
    mysql_select_db($dbDatabase, $db)or die("Couldn't select the database.");
    //Selects the database
    
    session_start();    
    $email = $_SESSION['email'];
	$appraiser = $email;
	$subject = $_POST['peername'];
	$creative = $_POST['creative'];
	$understand = $_POST['understand'];
	$seemore = $_POST['seemore'];
	$badge = $_POST['badge'];
	$sql = "INSERT INTO PeerAppraiser.feedback_table (`appraiser`, `subject`, `creative`, `understand`, `seemore`, `badge`) VALUES ('$appraiser', '$subject', '$creative', '$understand', '$seemore', `$badge`)";
	$result=mysql_query($sql,$db) or die(mysql_error());
	$_SESSION['logged'] = TRUE;
	header("Location: new.php"); // If user session is successfully started, return to new
	exit;
}
else{    //If the form button wasn't submitted go to new
    header("Location: new.php");    
    exit;
}
?> 
	