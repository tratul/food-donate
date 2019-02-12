<?php
  
  session_start();
  if (!(isset($_SESSION['id']))){
    header("location:../login.html");
	}
  $db = mysqli_connect("localhost","root","","fooddonate");
  
   if(isset($_POST['submit']))
		  {
			
			  $title = $_POST['title'];
			   $body = $_POST['body'];
			   $ownid = $_SESSION['id'];
			   
				  
				  
				  
			   if($title !="" && $body !="" )
				  {
				 $sql = "INSERT INTO post( title,body,ownid) VALUES( '$title','$body','$ownid')";
		
					  mysqli_query($db , $sql);
					  header("location:ownerpost.php");
					  //echo $ownid;
                      
					  
					  }
				  
				  
				  else{
					  
					  echo "Empty field!!!!";
				  }
				
		  }
		 
  
?>







