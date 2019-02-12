<?php
session_start();
if (!(isset($_SESSION['un']))){
    header("location:../login.html");
}
else if (!(isset($_SESSION['id']))){
    header("location:../login.html");
}
//else //{
?>
<!DOCTYPE html>
<html>
<head>
<title>Restaurat Owner</title>
<link rel="stylesheet" href="../css/1.css"/>
</head>


<body>


<div class="nav">   

   <ul>
    
      <li> <a href="ownerindex.php"> Home </a>| </li>
     <li>  <a href="ownerprofile.php"> profile</a>|  </li>
	 <li>  <a href="../logout.php"> logout</a>| </li>
	 <?php if(isset($_SESSION['un'])){
                $un= $_SESSION['un'];
        
                echo "<li><a href='#' style='float:right;'>"."<span class='label label-info'>Logged in as ".$un."</span></a></li>";

            }
            ?>
      

   </ul>
   </div>





<form name="form1" method="post" action="insertpost.php">
</br> </br>

<div>
   <center><textarea class="txt2" id="post" name="title" placeholder="Write title "></textarea></center>
      </div>
	  </br> </br>
    <div>
   <center><textarea class="txt1" id="post" name="body" placeholder="Write post.."></textarea></center>
      </div>
	  </br>
	  <div class="row">
     <center> <input type="submit" name="submit" value="Submit"></center>
    </div>
     </br> </br> </br> </br>
	

</form>
</body>


</html>

