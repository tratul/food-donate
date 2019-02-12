<?php
  session_start();
include('config.php');


$q=$_GET["q"];

$result=mysqli_query($conn,"SELECT email FROM userinfo where email= '$q' ");

$rows=mysqli_num_rows($result);
if ($rows != 0)
{
        echo "email already exist";
		$_SESSION['check']=1;

}
else
{
	$_SESSION['check']=0;
}

//else
//{
//}
?>