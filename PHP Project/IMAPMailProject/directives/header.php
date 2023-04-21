<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="lib/jquery-3.3.1.slim.min.js"></script>
<script src="lib/popper.min.js"></script>
<script src="lib/bootstrap.min.js"></script>

<style>
  .navbar-nav{
  padding-left:10px;

}
.form-inline{
   padding-right:10px;
}

</style>

<?php if(isset($_POST['submit'])): ?>
<?php
    session_start();
    $_SESSION['subject'] = htmlentities($_POST['subject']);
    header('Location:subject.php');
  ?>
<?php endif; ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mails.php">Mails</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="SelectMailsDeletion.php">Delete</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Options
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="FromSearchForm.php">Search with From Address</a>
          <a class="dropdown-item" href="BodySearchForm.php">Search with Keyword</a>
          <a class="dropdown-item" href="SinceDateForm.php">Search from Since Date</a>
          <hr class="dropdown-divider">
          <a class="dropdown-item" href="logout.php">Logout</a>

        </div>
      </li>
    </ul>
</div>
<div>
    <form class="form-inline my-2 my-lg-0" method="post">
      <div class="row align-items-center g-3">
        <div class="col-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search with Subject" aria-label="Search" name="subject" required>
        </div>
        <div class="col-auto">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Submit" name="submit">Submit</button> 
        </div>
      </div>
    </form>
  </div>
</nav>