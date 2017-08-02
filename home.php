<?php  
	$filepath = realpath(dirname(__FILE__)); 
	require_once ($filepath.'/config.php');
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multi Language Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    body > center > a{
      font-size: 30px;
    }
  </style>
</head>
<body>
<center><a href="home.php?lang=en_US">English</a></center>
<center><a href="home.php?lang=bn_BD">Bangla</a></center>
<div class="jumbotron text-center">
   <h1><?php echo _x("Bangladesh is a beautiful country") ?></h1>
</div>
  
<div class="container">
  <div class="row">
    <h3><?php echo _x("The main problem of this country is it's population") ?></h3>
  </div>
</div>
	
</body>
</html>



