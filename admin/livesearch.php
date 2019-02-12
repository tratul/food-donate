<?php

include('../config.php');


$q=$_GET["q"];

$result=mysqli_query($conn,"SELECT id, title FROM post where title like  '%$q%' and del = 0 ");

$rows=mysqli_num_rows($result);
if ($rows> 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<p><a href='singleview.php?id=$row[id]' class='leftborder'><b>".$row['title']."</b></a></p>";
    }

}
else
{
    echo "No post found according to this search term";
}