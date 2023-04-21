<?php
session_start();
    $username = $_SESSION['username'];
    $password = $_SESSION['password']; 
    $error = "username/password incorrect";

if ($mbox=imap_open('{imap.gmail.com:993/imap/ssl}INBOX', $username, $password))
        {
         echo "<h1>Connected: Login Successful</h1>\n";
         imap_close($mbox);
         header('Location:home.php');
        } else
        {
         $_SESSION["error"] = $error;
         header('Location:index.php');
         echo "<h1>AUTHENTICATION FAILED!</h1>\n";
        }

?>