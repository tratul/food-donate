<?php
session_start();
if (!(isset($_SESSION['un']))){
    header("location:../login.html");
}
else if (!(isset($_SESSION['id']))){
    header("location:../login.html");
}
?>
<DOCTYPE html>
<html>
<body style="background-color:lightgray;">
<head>
<title> resturent owner </title>
<link rel="stylesheet" href="../css/2.css"/>


</head>
   
    
    <div class="nav">   

   <ul>
    
      <li> <a href="ownerindex.php"> Home </a>| </li>
     <li>  <a href="ownerpost.php">  Write post </a>|  </li>
     <li>  <a href="ownerprofile.php"> profile</a>|  </li>
	 <li>  <a href="../logout.php"> logout</a>| </li>
       <?php if(isset($_SESSION['un'])){
                $un= $_SESSION['un'];
        
                echo "<li><a href='#' style='float:right;'>"."<span class='label label-info'>Logged in as ".$un."</span></a></li>";

            }
            ?>

   </ul>
   </div>
   </br></br></br></br>
   <div>
	<center> 	
  <table class="tab1">
		<tr>
        <th>POST ID</th>
        <th>TITLE</th>
        <th>BODY</th>
		</tr>
		
		  <?php
            require '../config.php';
			//session_start();
			$ownid = $_SESSION['id'];	
            $statement="select * from post where ownid = '$ownid'  order by id desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
               while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>"; 
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['title']."</td>";
					echo "<td>".$row['body']."</td>";					
					echo "</tr>";
                }
			
            }
            else
            {
                echo "Nothing found in db";
            }
            mysqli_close($conn);
        ?>
   </table>
  </center> 
   </div>	
   
</body>
</html>

