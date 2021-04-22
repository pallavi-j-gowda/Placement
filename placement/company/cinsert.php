<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = $_REQUEST['username'];
$webaddress = $_REQUEST['webaddress'];
$address = $_REQUEST['address'];
$phoneno = $_REQUEST['phoneno'];
$date = $_REQUEST['date'];
$password = $_REQUEST['password'];


 
// Attempt insert query execution
$sql = "INSERT INTO company(username, webaddress, address, phoneno, date, password) 
VALUES ('$username', '$webaddress', '$address', '$phoneno', '$date', '$password')";

if(mysqli_query($link, $sql)){
    header("Location: clogin.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
