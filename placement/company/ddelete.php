<?php

include "config.php"; // Using database linkection file here

$date = $_GET['date']; // get date through query string

$del = mysqli_query($link,"delete from addpdrive where date = '$date'"); // delete query

if($del)
{
    mysqli_close($link); // Close linkection
    header("location:drivedet.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>