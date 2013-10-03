<?php
if(isset($_POST['submit'])){
    $dbHost = "PeerAppraiser.db.10804303.hostedresource.com";
    $dbUser = "PeerAppraiser";            //Database User Name
    $dbPass = "P33r@pprais3r";            //Database Password
    $dbDatabase = "PeerAppraiser";    //Database Name
    
    $db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database.");
    //Connect to the database
    mysql_select_db($dbDatabase, $db)or die("Couldn't select the database.");
    //Selects the database
    
    //Search the database for the user name and password
    //Choose some sort of password encryption, I choose sha256
    //Password function (Not In all versions of MySQL).
    $email = mysql_real_escape_string($_POST['email']);
    $pas = mysql_real_escape_string($_POST['password']); //use hash('sha256', mysql_real_escape_string($_POST['password'])); for security
    $f_name = mysql_real_escape_string($_POST['f_name']);
    $l_name = mysql_real_escape_string($_POST['l_name']);
    
    $sql = "INSERT INTO `PeerAppraiser`.`users_table` (`email`, `password`, 'f_name', 'l_name') VALUES ('$email', '$pas', '$f_name', '$l_name')";
	$result=mysql_query($sql);
        session_start();
        $_SESSION['email'] = $row['email'];
        $_SESSION['f_name'] = $row['f_name'];
        $_SESSION['logged'] = TRUE;
        header("Location: confirm.php"); // If user session is successfully started, go to New
        exit;
}
else{    //If the form button wasn't submitted go to the index page
    header("Location: register.php");    
    exit;
}
?> 