<?php include 'directives/header.php'; ?>
<?php include 'directives/container.php'; ?>
<?php if(isset($_POST['submit'])): ?>
<?php
    session_start();
    $_SESSION['from'] = htmlentities($_POST['from']);
    header('Location:from.php');
  ?>
<?php endif; ?>
<div id="listData">
<div class="container">
<br><br>
<link href="css/bootstrap.min.css" rel="stylesheet">
<form method="post">
  <div class="form-group">
        <div class="form-floating">
            <div class="row align-items-center g-3">
                    <div class="col-auto">
                      <input type="text" name="from" class="form-control" id="floatingInput" placeholder="Enter The Address" required>
                    </div>
                      <div class="col-auto">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
            </div>
        </div>
    </div>
</form>
</div>
</div>
