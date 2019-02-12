<?php

//including the database connection file
    include("../config.php");
    //connect_db();
//getting id of the data from url
    $id = $_GET['id'];

//deleting the row from table // actually not deleting it just unlinking from the result
    $result = mysqli_query($conn,"update postaction set action='false' WHERE id='$id'");
	$sql= "  select * from postaction where id = '$id' ";
					$result1=mysqli_query($conn , $sql);
					$count=mysqli_num_rows($result1);
						
						if($count == 1)
						{      
					      while($row = mysqli_fetch_assoc($result1))
                    {
                    
                     $postid=$row['postid'];
                    //$postTitle= $row['title'];
					}
						$result2 = mysqli_query($conn,"update post set assign='false' WHERE id='$postid'");	
						}
    
	//close_db();
//redirecting to the display page (listdata.php in our case)
    header("Location:notification.php");

?>
