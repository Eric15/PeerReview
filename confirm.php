<?php
session_start();
if(!$_SESSION['logged']){
    header("Location: index.php");
    exit;
}
echo 'Logged in as '.$_SESSION['username'];
?>
<meta http-equiv="refresh" content="1;url=new.php">
