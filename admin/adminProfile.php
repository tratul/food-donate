<?php
session_start();
if (!(isset($_SESSION['id']))){
    header("location:../login.html");
}//else //{
?>
<DOCTYPE html>
<html>
<body style="background-color:lightgray;">
<head>
<title> volunteer profile </title>
<link rel="stylesheet" href="../css/adminProf.css"/>

  

</head>
 <!--  <h2 style="text-align:center ; color:Tomato"> welcome !!!!!!!! </h2> -->
    
    <div class="nav">   

   <ul>
    
      <li> <a href="adminHome.php"> Home </a>| </li>
     <li>  <a href="adminResO.php"> Rest Owner</a>|  </li>
	 <li>  <a href="adminVol.php"> Volunteer</a>|  </li>
	 <li>  <a href="adminAdd.php"> Add Admin</a>|  </li>
	 <li>  <a href="adminProfile.php"> Profile </a>|  </li>
	  <li>  <a href="notification.php"> notification </a>|  </li>
	 <li>  <a href="../logout.php"> logout</a>| </li>
     <?php if(isset($_SESSION['un'])){
                $un= $_SESSION['un'];
        
                echo "<li><a href='#' style='float:right;'>"."<span class='label label-info'>Logged in as ".$un."</span></a></li>";

            }
            ?>

   </ul>
   </div>
   <?php

        require '../config.php';
        $id = $_SESSION['id'];
		
        $heading=$summertext='';


            $statement="select * from admin where id='$id'";
            $result = mysqli_query($conn, $statement);

           // if (mysqli_num_rows($result) = 1)
           // {
                while($row = mysqli_fetch_assoc($result))
                {
                    
                     //setcookie('heading',$row['heading']);
                     $firstname=$row['firstname'];
                    // setcookie('summertext',$row['summertext']);
                     $email=$row['email'];
                     $phone=$row['phone'];
					 
                    // $id=$row['id'];
                    
                }
				$_SESSION['name']=$firstname;
				$_SESSION['email']=$email;
				$_SESSION['phone']=$phone;
				
            //}
            mysqli_close($conn);
    ?>
     <fieldset>
    <legend><b>PROFILE</b></legend>
	<form>
		<br/>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?php echo $firstname; ?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php echo $email; ?></td>
			</tr>		
		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Phone</td>
				<td>:</td>
				<td><?php echo $phone; ?></td>
			</tr>		
			
		</table>	
        <hr/>
        <a class="4" href="edit_profileAdmin.php">Edit Profile</a>
	</form>
</fieldset> 
  
       
 
     
</body>
</html>

