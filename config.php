<?php

$conn= mysqli_connect('localhost','root',"",'fooddonate');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Write at least 2 functions for open and close connection to database.
?>