<?php 
session_start();
unset($_SESSION['username']); 
unset($_SESSION['password']);
unset($_SESSION['subject']); 
unset($_SESSION['from']);
unset($_SESSION['date']);
unset($_SESSION['body']);
session_destroy();
header("Location: index.php");
exit;
?>