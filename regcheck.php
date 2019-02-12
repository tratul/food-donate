<?php
  
  session_start();
  $db = mysqli_connect("localhost","root","","fooddonate");
  
   if(isset($_POST['submit']))
		  {
		  if($_SESSION['check']==1 || $_SESSION['check1']==1 )
			{	
				echo"name or email already exist";
				
			}
			else
			{
			   $name = $_POST['fullname'];
			   $email = $_POST['email'];
			   $phone = $_POST['phone'];
			   $area = $_POST['area'];
			   $password = $_POST['password'];
			   $password2 = $_POST['password2'];
			   $user_type = $_POST['usertype'];
			   $_SESSION['check']=0; 
			   $_SESSION['check1']=0; 
				  
				  
				  
			   if($password == $password2)
				  {
				 $sql = "INSERT INTO userinfo ( name, email, area,user_type, phone, password) VALUES( '$name','$email','$area','$user_type','$phone','$password')";
		
					  mysqli_query($db , $sql);
					  header("location:login.html");
                      
					  
					  }
				  
				  
				  else{
					  
					  echo "passwords are not matched please try again!!!!";
				  }
			}
				
		  }
		 
  
?>







