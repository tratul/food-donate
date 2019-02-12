<html>
<head>
	<title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="js/bootstrap.min.js"></script>
</head>
<style>
.error {color: #FF0000;}
</style>
<body class="container">
<br>

<?php
include("config.php");

       if(isset($_POST['submit'])) {
	
  	$title =$_POST['title'];
	$ownid='1';
    $body = $_POST['body'];
    
	        mysqli_query($conn,"INSERT INTO post(title,body,ownid) VALUES('$title','$body','$ownid')")
			or die("Could not execute the insert query.");
			
			header("location: ownerpost.html");
	   }
?>

	
		
<?php

//close the db connection here
?>
</body>
</html>
