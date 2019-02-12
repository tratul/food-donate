
<?php
session_start();
if (!(isset($_SESSION['id']))){
    header("location:../login.html");
}
if (!(isset($_SESSION['id']))){
    header("location:../login.html");
}
//else //{
?>
<!DOCTYPE html>
<html>
<head>
<title>Volunteer12</title>
<link rel="stylesheet" href="../css/3.css"/>
</head>


<body>

<div class="nav">   

   <ul>
    
     <li> <a href="volunteerindex.php"> Home </a>| </li>
	 <li>  <a href="volunteerprofile.php"> Profile</a>|  </li>
	 <li>  <a href="../logout.php"> logout</a>| </li>
   </ul>
   </div></br> </br>
   <div class="nav2" > 
  <center> 	
<div class="tab6">
        <?php
            require '../config.php';

            $statement="select * from post where assign='false' order by id desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<div class='tab6'><div class='tab8'><div class='tab7'><b>".$row['title']."</div><div class='tab8'>".$row['body'] ."</div><div class='tab9'><a href=\"volAccept.php?id=$row[id]\" onClick=\"return confirm('Are you sure ?')\">Accept</a> </div></div></div>";
                }
            }
            else
            {
                echo "Nothing found in db";
            }
            mysqli_close($conn);
        ?>
</div>
</br></br>
  <div>
  
  </div>
  </center> 
  

   
  </div>
   </body>


</html>