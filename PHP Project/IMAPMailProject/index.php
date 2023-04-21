<?php if(isset($_POST['submit'])): ?>
<?php
    session_start();
    $_SESSION['username'] = htmlentities($_POST['username']);
    $_SESSION['password'] = htmlentities($_POST['password']);
    header('Location:login.php');
  ?>
<?php endif; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Retriving Mails Using IMAP</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body class="text-center">
<main class="form-signin">
  <div id="note" class="card card-body bg-light">Before Proceeding Enable IMAP Settings in Your Account and Allow Less Secure Apps ON in your Google Account</div>
  <br><br>
  <form method="post">
    <h1 class="h3 mb-3 fw-normal">Sign In using GMail</h1>

    <div class="form-floating">
      <input type="username" name="username" class="form-control" id="floatingInput" placeholder="username" required>
      <label for="floatingInput">Username</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>
    <br>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="Submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
  </form>
</main>
  </body>
</html>
