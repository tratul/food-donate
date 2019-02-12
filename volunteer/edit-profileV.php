

<?php
session_start();
if (!(isset($_SESSION['id']))){
    header("location:login.html");
}
?>



<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/editprofile.css"/>
	
	</head>
	
	
	<script>
	function validateForm() {
    var x = document.forms["myForm"]["name"].value;
	var z = document.forms["myForm"]["email"].value;
	var p = document.forms["myForm"]["area"].value;
	var q = document.forms["myForm"]["phone"].value;
	
    if (x == "") {
        alert(" Please enter your First Name");
		document.myForm.name.focus() ;
        return false;
    }
	
	
	
	if (z == "") {
        alert("please provide your email");
		document.myForm.email.focus() ;
        return false;
    }
	if (p == "") {
        alert("please enter your area");
		document.myForm.area.focus() ;
        return false;
    }
	if (q == "") {
        alert("please enter your phone number");
		document.myForm.phone.focus() ;
        return false;
    }
	
	  
}
	</script>	
	 
   
    
     
	 
	<center>	
<fieldset>
 <legend> <h1 class="form_title">Edit Profile</h1> </legend> 
  <div id="container">
	  <div id="container_body">
	 <form name="myForm" action="edit_profile_check.php" method="POST" >
		<div id="errorBox"></div>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td> <div id="comman"><input type="text" name="name" value="<?php echo $_SESSION["name"]; ?>" placeholder=" Name"  class="input_text">   </div>      
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					 <div id="comman">
					<input type="text" name="email" value="<?php echo $_SESSION["email"]; ?>"  placeholder="Example@gmail.com" class="input_text">
					</div>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Area</td>
				<td>:</td>
				<td> <div id="comman">
			<input type="text" name="area" value="<?php echo $_SESSION["area"]; ?>" placeholder="area"  class="input_text">        
		  </div></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Phone</td>
				<td>:</td>
				<td> <div id="comman">
			<input type="text" name="phone" value="<?php echo $_SESSION["phone"]; ?>" placeholder=""  class="input_text">        
		  </div></td>
				<td></td>
			</tr>	
			<tr><td colspan="4"><hr/></td></tr>
			
			
		  </div>
		 	</fieldset>
			
			</center>
				</td>
				
		</table>
		<hr/>
	<div>
			<input type="submit" name="submit" value="Reset" id="reSet" onClick="return Submit1();">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="submit" value="Update Profile" id="sign_user1" onClick="return Submit();">
		  </div>
		  <br>		
	</form>
		</div>
	  </div>
</fieldset>