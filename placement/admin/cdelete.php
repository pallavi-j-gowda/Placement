<?php

include "config.php"; // Using database linkection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($link,"delete from company where id = '$id'"); // delete query

if($del)
{
    mysqli_close($link); // Close linkection
    header("location:companyTable.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>