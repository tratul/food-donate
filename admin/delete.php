<?php

//including the database connection file
    include("../config.php");
    //connect_db();
//getting id of the data from url
    $id = $_GET['id'];

//deleting the row from table // actually not deleting it just unlinking from the result
    $result = mysqli_query($conn,"update post set del=1 WHERE id='$id'");
	//close_db();
//redirecting to the display page (listdata.php in our case)
    $sql3= "  select * from post where id = '$id' ";
					$result3=mysqli_query($conn , $sql3);
					$count3=mysqli_num_rows($result3);
						
						if($count3 == 1)
						{      
					      while($row = mysqli_fetch_assoc($result3))
                    {
                    
                   //  $volunteerName=$row['name'];
					 $id=$row['id']; // $qs=$row['id'];
					 
                     $title= $row['title']; // $opA= $row['title'];
					 
					 $body=$row['body']; // $opB=$row['body'];
					}
						}
				/*$fullname = $id1;
			   $email = $title1;
			   $phone = $body1;*/
			    //$password = $_SESSION['password'];
				  //$password2 = $_SESSION['password2'];

$filename="DeletedPost.xml";
if(filesize($filename)==0)
{
	$xml = new XMLWriter();
    $xml->openMemory();
    $xml->setIndent(true);
    $xml->startDocument('1.0', 'UTF-8');
    $xml->startElement('information');
    
      $xml->startElement("nameinfo");
	  $xml->writeElement("id",$id);
	  
      $xml->writeElement("title",$title);
	  
	   $xml->writeElement("body",$body);
	   
	  // $xml->writeElement("password",$password);
	 
	   // $xml->writeElement("password2",$password2);
		
		
	  
	
      
      $xml->endElement();

    $xml->endElement();
    $xml->endDocument();
	

    
    $file = $xml->outputMemory();
    file_put_contents($filename,$file);
} 

else{
	$xml = new DOMDocument();
	$xml->preserveWhiteSpace = false;
	$xml->formatOutput = true;
	$xml->load($filename);
	
	$info = $xml->createElement("nameinfo");
	$fid = $xml->createElement("id",$id);
	$ftitle = $xml->createElement("title",$title);
	$fbody = $xml->createElement("body",$body);
	
	
	//$pw = $xml->createElement("password",$password);
	
	
	$info->appendChild($fid);
	$info->appendChild($ftitle);
	$info->appendChild($fbody);
	//$info->appendChild($pw);

	
	
	$xml->documentElement->appendChild($info);
	$xml->save($filename);
	
}
header("Location:adminHome.php");
?>
 
