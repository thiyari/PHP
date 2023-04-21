<?php
	// Start session
	session_start();

	if(isset($_POST['name'])){
		if(isset($_SESSION['bookmarks'])){
			$_SESSION['bookmarks'][$_POST['name']] = $_POST['url'];
		} else {
			$_SESSION['bookmarks'] = Array($_POST['name'] => $_POST['url']); 
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'clear'){
		session_unset();
		session_destroy();
		header("Location: index.php"); 
	}  

	if(isset($_GET['action']) && $_GET['action'] == 'delete'){
		unset($_SESSION['bookmarks'][$_GET['name']]);
		header("Location: index.php"); 
	}  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap.min.css">
	<style>
		.navbar{
			padding: 10px;
		}
		#align{
            margin-left: auto;
        }
        .delete{
        	color: white;
        }
	</style>
	<title>Bookmarker</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Bookmarker</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
    </ul>
    <ul class="navbar-nav" id="align">
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=clear">Clear All</a>
      </li>
  </div>
</nav>
<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
				<div class="form-group">
					<label>Website Name</label>
					<input type="text" class="form-control" name="name">
				</div>
				<br>
				<div class="form-group">
					<label>Website URL</label>
					<input type="text" class="form-control" name="url">
				</div>
				<br>
				<input type="submit" value="Submit" class="btn btn-default">
			</form>
		</div>
		<div class="col-md-5">
			<?php if(isset($_SESSION['bookmarks'])) : ?>
				<ul class="list-group">
					<?php foreach($_SESSION['bookmarks'] as $name => $url) : ?>
						<li class="list-group-item">
							<a href="<?php echo $url; ?>"><?php echo $name; ?></a>
							<a class="delete" 
							href="index.php?action=delete&name=<?php echo $name; ?>">[X]
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
</div>
</body>
</html> 