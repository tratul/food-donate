<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" href="../css/2.css"/>
</head>


<body>

<div class="nav">   

   <ul>
    
     <li> <a href="adminHome.php"> Home </a>| </li>
     <li>  <a href="adminResO.php"> Rest Owner</a>|  </li>
	 <li>  <a href="adminVol.php"> Volunteer</a>|  </li>
	 <li>  <a href="adminAdd.php"> Add Admin</a>|  </li>
	 <li>  <a href="adminAdd.php"> Profile </a>|  </li>
	  <li>  <a href="notification.php"> notification </a>|  </li>
	 <li>  <a href="../logout.php"> logout</a>| </li>
   </ul>
   </div></br> </br>
   <div class="nav2" > 
  <center> 	
  <table class="tab1">
		<tr>
        <th>ID</th>
        <th>NAME</th>
		<th>APPROVAL</th>
        <th>ACTION</th>
		</tr>
		
		  <?php
            require '../config.php';

            $statement="select * from userinfo where user_type ='volunteer' order by id desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
               while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>"; 
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['approve']."</td>";
					echo "<td><a href=\"volunteerReject.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> </td>";
						
					echo "<td><a href=\"volunteerApprove.php?id=$row[id]\" onClick=\"return confirm('Approve successfully!!!!!')\">Approve</a></td>";
					
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