<?php

session_start();
if (!(isset($_SESSION['id']))){
    header("location:../login.html");
}

//including the database connection file
    include("../config.php");
    //connect_db();
//getting id of the data from url
    $id = $_SESSION['id'];
	$name =$_POST['name'];
	$email =$_POST['email'];
	$phone =$_POST['phone'];
	$area =$_POST['area'];

//deleting the row from table // actually not deleting it just unlinking from the result
    $result = mysqli_query($conn,"update userinfo set name='$name', email = '$email', phone = '$phone', area = '$area' WHERE id='$id'");
	//close_db();
//redirecting to the display page (listdata.php in our case)
    header("Location:volunteerprofile.php");
	//echo"ghuibvuj";

?>
