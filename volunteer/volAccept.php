<?php
session_start();
if (!(isset($_SESSION['un']))){
    header("location:../login.html");
}
if (!(isset($_SESSION['id']))){
    header("location:../login.html");
}
//else //{


//including the database connection file
    include("../config.php");
    //connect_db();
//getting id of the data from url
    $id = $_GET['id'];

//deleting the row from table // actually not deleting it just unlinking from the result
    $result = mysqli_query($conn,"update post set assign='true' WHERE id='$id'");
	
	$sql1= "  select * from post where id = '$id' ";
	  $result1=mysqli_query($conn , $sql1);
	 $count1=mysqli_num_rows($result1);
						
						if($count1 == 1)
						{      
					      while($row = mysqli_fetch_assoc($result1))
                    {
                    
                     $ownid=$row['ownid'];
                    $postTitle= $row['title'];
					}
					$sql2= "  select * from userinfo where id = '$ownid' ";
					$result2=mysqli_query($conn , $sql2);
					$count2=mysqli_num_rows($result2);
						
						if($count2 == 1)
						{      
					      while($row = mysqli_fetch_assoc($result2))
                    {
                    
                     $ownerName=$row['name'];
                    //$postTitle= $row['title'];
					}
					$vid= $_SESSION['id'];
					$sql3= "  select * from userinfo where id = '$vid' ";
					$result3=mysqli_query($conn , $sql3);
					$count3=mysqli_num_rows($result3);
						
						if($count3 == 1)
						{      
					      while($row = mysqli_fetch_assoc($result3))
                    {
                    
                     $volunteerName=$row['name'];
                    //$postTitle= $row['title'];
					}
							
						}
						}
						}
    $result4 = mysqli_query($conn,"insert into postaction(ownerName,volunteerName,postTitle,postid) values('$ownerName','$volunteerName','$postTitle','$id')");
	//close_db();
//redirecting to the display page (listdata.php in our case)
    header("Location:volunteerindex.php");

?>
