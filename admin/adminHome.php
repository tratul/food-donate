<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" href="../css/4.css"/>

    <script>
        function showResult(str) {
            if (str.length==0) {
                document.getElementById("livesearch").innerHTML="";
                document.getElementById("livesearch").style.border="0px";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("livesearch").innerHTML=this.responseText;
                    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
                }
            }
            xmlhttp.open("GET","livesearch.php?q="+str,true);
            xmlhttp.send();
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
	 <li>  <a href="adminProfile.php"> Profile </a>|  </li>
	  <li>  <a href="notification.php"> notification </a>|  </li>
	 <li>  <a href="../logout.php"> logout</a>| </li>
   </ul>
   </div></br> </br>
   <div class="nav2" > 
  <center>
	<form>
        <input type="text" name="search" placeholder="Search" onkeyup="showResult(this.value)">
    </form>
<div id="livesearch" style="border-bottom-left-radius: 4px;border-bottom-right-radius: 4px; width:65%; background:rgb(166,166,255)"></div>	
  <table class="tab1">
		<tr>
        <th>POST ID</th>
        <th>TITLE</th>
        <th>ACTION</th>
		</tr>
		
		  <?php
            require '../config.php';

            $statement="select * from post where del = 0 order by id desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
               while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>"; 
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['title']."</td>";
					//echo "<td>".$row['datetime']."</td>";
					echo "<td><a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
					    </td>";
						
					echo "<td><a href=\"singleview.php?id=$row[id]\">View</a></td>";
							

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