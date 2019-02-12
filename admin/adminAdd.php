<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" href="../css/2.css"/>

<script>
var checkEmail = true;
	 function showResult(str) {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("email_suggestion").innerHTML=this.responseText;
					if (this.responseText == "Email Already Exist"){
						document.getElementById("email").innerHTML = "U can not";
						checkEmail= false;
					}
                }
            }
            xmlhttp.open("GET","suggestion.php?q="+str,true);
            xmlhttp.send();
        }
	var checkName = true;
	 function showResult1(str) {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("name_suggestion").innerHTML=this.responseText;
					if (this.responseText == "Name Already Exist"){
						document.getElementById("fullname").innerHTML = "U can not";
						checkName= false;
					}
                }
            }
            xmlhttp.open("GET","nameSuggestion.php?q="+str,true);
            xmlhttp.send();
        }

function validateForm() {
    var x = document.forms["myForm"]["firstname"].value;
	var y = document.forms["myForm"]["lastname"].value;
	var z = document.forms["myForm"]["email"].value;
	var p = document.forms["myForm"]["phone"].value;
	var q = document.forms["myForm"]["password1"].value;
	var r = document.forms["myForm"]["password2"].value;
    if (x == "" || x == null) {
        alert(" Please enter your First Name");
		document.myForm.firstname.focus() ;
        return false;
    }
	
	if (y == "" || y==null) {
        alert("please enter your last name");
		document.myForm.lastname.focus() ;
        return false;
    }
	
	if (z == "" || z==null) {
        alert("please provide your email");
		document.myForm.email.focus() ;
        return false;
    }
	if (p == "" || p==null) {
        alert("please enter your phone number");
		document.myForm.phone.focus() ;
        return false;
    }
	if (q == "" || q==null) {
        alert("please enter your password");
		document.myForm.password1.focus() ;
        return false;
    }
	if (r == "" || r==null) {
        alert("please provide your password once again");
		document.myForm.password2.focus() ;
        return false;
    }
	if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value))
		 {
			alert("You have entered an invalid email address!")
			return (false)
		 }
	if(!/^[0-9]{11}$/.test(myForm.phone.value))
		 {
		  alert("You have to entered only numeric values with 11 digit as a phone number!")
		  return (false)
		  
		 }
	if(!/(?=.*[A-Z])(?=.*\d)(?=.*[a-z]).{8,}/.test(myForm.password1.value))
		 {
		  alert("Password should have 8 characters long, start with an uppercase character and there must be a special character")
		  return (false)
		  
		 }
	  
	  var firstpassword=document.myForm.password1.value;  
    var secondpassword=document.myForm.password2.value;  
  
     if(firstpassword==secondpassword){  
     return true;  
       }  
    else{  
        alert("password must be same! please check your password!!!!");  
      return false;  
        }  
	  
    // When the user clicks on the password field, show the message box
      myInput.onfocus = function() {
       document.getElementById("message").style.display = "block";
     }

    // When the user clicks outside of the password field, hide the message box
     myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
     }	
}

</script>

</head>


<body>

<div class="nav">   

   <ul>
    
     <li> <a href="adminHome.php"> Home </a>| </li>
     <li>  <a href="adminResO.php"> Rest Owner</a>|  </li>
	 <li>  <a href="adminVol.php"> Volunteer</a>|  </li>
	 <li>  <a href="adminAdd.php"> Add Admin</a>|  </li>
	 <li>  <a href="adminProfile.php"> Profile</a>|  </li>
	  <li>  <a href="notification.php"> notification </a>|  </li>
	 <li>  <a href="../logout.php"> logout</a>| </li>
   </ul>
   </div></br> </br>
   <div class="nav2" > 
  <center> 	
 
<form  name="myForm" method="post"  onsubmit="return validateForm()"  action="adminReg.php">   
<center>
<table>
  <tr>
 <td> First Name: </td>
 <td> <input type="text" name="firstname" id="fullname" onblur="(showResult1(this.value))"  /> <div id="name_suggestion"></div></td>
  
  </tr>
  
  <tr>
 <td> Last Name: </td>
 <td> <input type="text" name="lastname"  /> </td>
  
  </tr>
  
  <tr> <td> </td></tr>
  <tr>
  <td>E-mail:</td> 
  <td><input type="text" name="email"id="email"  onblur="(showResult(this.value))" /> <div id="email_suggestion"></div></td>
  
  </tr>
  <tr> <td> </td></tr>
  
  <tr>
  <td>Phone:</td>
  <td><input type="number" name="phone" /> </td>
 
  </tr>
  <tr> <td> </td></tr>
  <tr>
  <td>Pasword:</td>
  <td>   <input type="password" id="pass" name="password1" </td>
  
  </tr>
  <tr> <td> </td></tr>
  <tr>
  <td> confirm password:</td>
  <td><input type="password" name="password2"  /></td>
 
  <tr> <td> </td></tr>
  <tr>
  <tr></tr>
  <tr></tr>
 <td> <input type="submit" name ="submit" value= "submit"/> </td>
  
  </tr>
   <br><br>
  
  </table>
</form>
 
 
  </center> 
   
  </div>
   </body>


</html>