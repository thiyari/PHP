<?php include 'directives/header.php'; ?>
<?php include 'directives/container.php'; ?>

<div id="listData">
    <div class="container">
<?php
session_start();
    $username = $_SESSION['username'];
    $password = $_SESSION['password']; 
    ?>
<br>
<h1>Welcome to Mail Customization</h1>
<ul>
<li>Here you can fetch, search and delete your mails easily</li>
<li>Fetch your mails from Mails Menu</li>
<li>Search you mails based on subject line at top right corner</li>
<li>Please wait until the mails get fetched or delete them</li>
</ul>
</div>
</div>