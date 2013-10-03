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
    
    //Search the database for the user name and password
    //Choose some sort of password encryption, I choose sha256
    //Password function (Not In all versions of MySQL).
    $new_usr = mysql_real_escape_string($_POST['new_user']);
    $pas = mysql_real_escape_string($_POST['password']); //use hash('sha256', mysql_real_escape_string($_POST['password'])); for security
    $sql = mysql_query(INSERT INTO `PeerAppraiser`.`users_table` (`username`, `password`) VALUES ('$new_usr', '$pas'));
    if(mysql_num_rows($sql) == 1){
        $row = mysql_fetch_array($sql);
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['logged'] = TRUE;
        header("Location: confirm.php"); // If user session is successfully started, go to New
        exit;
    }
    else{
        header("Location: register.php");
        exit;
    }
}else{    //If the form button was not submitted go to the index page
    header("Location: index.php");    
    exit;
}
?> 