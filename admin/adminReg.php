<?php
  
  session_start();
  $db = mysqli_connect("localhost","root","","fooddonate");
  
   if(isset($_POST['submit']))
		  {
			if($_SESSION['check']==1 || $_SESSION['check1']==1)
			{	
				echo"name or email already exist";
				
			}
			else
			{
			  $fname = $_POST['firstname'];
			  $lname = $_POST['lastname'];
			  $email = $_POST['email'];
			  $phone = $_POST['phone'];
			  $password1 = $_POST['password1'];
			  $password2 = $_POST['password2'];
				  
				  
				if($fname != "" || $lname != "" || $email != "" || $phone != ""|| $password1 != "" ||$password2 != "")
				  {
					  if($fname != null || $lname != null || $email != null || $phone != null|| $password1 != null ||$password2 != null)
					  {
						if($password1 == $password2)
						{
							$sql = "INSERT INTO admin ( firstname, lastname, email, phone, password) VALUES( '$fname','$lname','$email','$phone','$password1')";
		
							mysqli_query($db , $sql);
							$_SESSION['check']=0; 
							$_SESSION['check1']=0; 
							//Session_destroy();
							header("location:adminHome.php");
                      
					  
						}
				  
				  
						else
						{					  
							echo "passwords are not matched please try again!!!!";
						}
					  }
					  else
						  echo "fiil the field";
				  
				  }
				  else
					  echo "fiil the field";
				  
			}
				
		  }
		 
  
?>







