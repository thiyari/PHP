<?php include 'directives/header.php'; ?>
<?php include 'directives/container.php'; ?>
<?php if(isset($_POST['submit'])): ?>
<?php
    session_start();
    $_SESSION['date'] = htmlentities($_POST['date']);
    header('Location:date.php');
  ?>
<?php endif; ?>


<!DOCTYPE html>
<html>
    <head>
        <title>jQuery DatePicker</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker").datepicker({ dateFormat: 'dd-MM-yy' });
            });
        </script>

    </head>
    <body>
      <div id="listData">
      <div class="container">
        <br><br>
        <div class="form-group">
        <div class="form-floating">
        <form method="post">
            <div class="row align-items-center g-3">
                    <div class="col-auto">
                      <input class="form-control" type="text" name="date" id="datepicker" placeholder="Search By Date" required>
                    </div>
                      <div class="col-auto">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
            </div>
        </form>
      </div>
    </div>
            </div>
          </div>
    </body>
</html>



