<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<head>
<link rel="stylesheet" href="css/logindesign.css"/>
<style>
       body{
	background-image: url("image/pic5.jpg");
	background-repeat: no-repeat;
    background-size: 1600px 800px;
	font:white;
	 
	}         
</style>
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
		var fullname = document.forms["form1"]["fullname"].value;
		var area = document.forms["form1"]["area"].value;
		var email = document.forms["form1"]["email"].value;
		var phone = document.forms["form1"]["phone"].value;
		var password = document.forms["form1"]["password"].value;
		var password2 = document.forms["form1"]["password2"].value;
		var usertype = document.forms["form1"]["usertype"].value;
		if (fullname == "" || area== "" ||email==""||phone=="" || password==""||password2=="" || usertype=="")
			{
			alert("All the fields are required");
			return false;
		   }
		 if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form1.email.value))
		 {
			alert("You have entered an invalid email address!")
			return (false)
		 }
		 
	  
		 if(!/^[0-9]{11}$/.test(form1.phone.value))
		 {
		  alert("You have to entered only numeric values with 11 digit as a phone number!")
		  return (false)
		  
		 }
		 if(!/(?=.*[A-Z])(?=.*\d)(?=.*[a-z]).{8,}/.test(form1.password.value))
		 {
		  alert("Password should have 8 characters long, start with an uppercase character and there must be a special character")
		  return (false)
		  
		 }
		 if(password2!=password)
		 {
		  alert("Password does not match")
		  return (false)
		  
		 }
		if ( ( form1.usertype[0].checked == false ) && ( form1.usertype[1].checked == false ) ) 
		{
			alert ( "Please choose your User Type: Owner or Vulenteer " ); 
		return false;
		}
	
}


</script>
</head>
<body>
 




<form  name="form1" method="post" onsubmit="return validateForm()" action="regcheck.php">   
<center>
<table>
  <tr>
 <td> FullName: </td>
 <td> <input type="text" id="fullname" onblur="(showResult1(this.value))" name="fullname" value=""S/><div id="name_suggestion"></div> </td>
  
  </tr>
  <tr> <td> </td></tr>
  <tr>
  <td>E-mail:</td> 
  <td><input type="email" id="email" onblur="(showResult(this.value))" name="email" value="" /> <div id="email_suggestion"></div> </td>
  
  </tr>
  <tr> <td> </td></tr>
  
  <tr>
  <td>Phone:</td>
  <td><input type="text" name="phone" /> </td>
 
  </tr>
  
  <tr>
      <td>Area</td>
	   <td><input type="text" name="area" ></td>
  </tr>
  
  <tr> <td> </td></tr>
  <tr>
  <td>Pasword:</td>
  <td><input type="password" name="password" /></td>
  
  </tr>
  <tr> <td> </td></tr>
  <tr>
  <td> confirm password:</td>
  <td><input type="password" name="password2" /></td>
 
  </tr>
  <tr> <td> </td></tr>
  <tr>
 <td> User Type:</td>
 <td>

  <input type="radio" name="usertype" value="owner"   />owner
  <input type="radio" name="usertype" value="volunteer"  />volunteer
  
 
      
     </td>
  </tr>
  <tr> <td> </td></tr>
  <tr>
  <tr></tr>
  <tr></tr>
 <td> <input type="submit" name ="submit" value= "submit"/> </td>
  
  </tr>
   <br><br>
  
  </table>
</form>
<p>already a member? </p> 
 <a href="login.html"> sign in </a>
<br><br>


</center>
</body>
</html>