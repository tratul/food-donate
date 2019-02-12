<?php
require 'config.php';
session_start();
$un=$_POST['name'];
$pw=$_POST['password'];


        if (isset($_POST['login']))
        {
			$sql1= "  select * from userinfo where name='$un' and password='$pw' AND user_type='owner' ";
			$result1=mysqli_query($conn , $sql1);
			$count1=mysqli_num_rows($result1);
					
					if($count1 == 1)
					{      
				      /*while($row = mysqli_fetch_assoc($result1))
						{
                  
							$id=$row['id'];
							$_SESSION['id']= $id;
						}*/
				         $sql11= "  select * from userinfo where name='$un' and password='$pw' AND user_type='owner' AND approve='true'";
						$result11=mysqli_query($conn , $sql11);
						$count11=mysqli_num_rows($result11);
					
						if($count11 == 1)
						{      
							while($row = mysqli_fetch_assoc($result11))
							{
                  
								$id=$row['id'];
								$_SESSION['id']= $id;
							}
							$_SESSION['un']= $un;
							header("location:owner/ownerindex.php");
						
						}
						else
						{
							echo"Need Admin Aproval";
						}
						 // $_SESSION['un']= $un;
						//header("location:owner/ownerindex.php");
						
					}
					else
					{ 
						$sql2= "  select * from userinfo where name='$un' and password='$pw' AND user_type='volunteer' ";
						$result2=mysqli_query($conn , $sql2);
						$count2=mysqli_num_rows($result2);
						if($count2 == 1)
						{      
							/*while($row = mysqli_fetch_assoc($result2))
							{
					
								$id=$row['id'];
								$_SESSION['id']= $id;
							}
							$_SESSION['un']= $un;
							header("location:volunteer/volunteerindex.php");*/
							$sql21= "  select * from userinfo where name='$un' and password='$pw' AND user_type='volunteer' AND approve='true' ";
							$result21=mysqli_query($conn , $sql21);
							$count21=mysqli_num_rows($result21);
							if($count21 == 1)
							{      
								while($row = mysqli_fetch_assoc($result21))
								{
					
									$id=$row['id'];
									$_SESSION['id']= $id;
								}
								$_SESSION['un']= $un;
								header("location:volunteer/volunteerindex.php");
							}
							else
							{
								echo"Need Admin Aproval";
							}
						}
					
						else
						{
							$sql3= "  select * from admin where firstname='$un' and password='$pw' ";
							$result3=mysqli_query($conn , $sql3);
							$count3=mysqli_num_rows($result3);
							if($count3 == 1)
							{      
								while($row = mysqli_fetch_assoc($result3))
								{
					
								$id=$row['id'];
								$_SESSION['id']= $id;
								}
								$_SESSION['un']= $un;
								header("location:admin/adminHome.php");
							}
							else
							{
								echo "User Name or Password is wrong please try again !!!!";
							}
						}
						mysqli_close($conn);		
					}
					
		}	
         else
        {
            echo "User Name or Password is empty !!!!";
        }
          

 ?>