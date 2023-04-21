<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JobLister</title>
	<!--<link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootswatch/bootstrap.min.css"> 
</head>
<body>
	<div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="create.php">Create Listing</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
      </div>
      <?php displayMessage(); ?>