<!DOCTYPE html>
<?php $id = $_GET['id']; ?>
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
         <li>  <a href="adminProfile.php"> Profile </a>|  </li>
	 <li>  <a href="../logout.php"> logout</a>| </li>
   </ul>
   </div></br> </br>
   <center>
   <div class="g1">
        <?php
            require '../config.php';

            $statement="select * from post where id='$id'";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<div class='panel-group'><div class='panel2'><div class='panel3'><h2>".$row['title']."</h2>  </div><div class='panel4'>".$row['body'] ."</div></div></div>";
                }
            }
            else
            {
                echo "Nothing found in db";
            }
            mysqli_close($conn);
        ?>
</div>
</center>
</body>
</html>