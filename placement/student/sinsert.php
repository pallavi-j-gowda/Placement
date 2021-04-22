<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id = $_REQUEST['id'];
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$phoneno = $_REQUEST['phoneno'];
$address = $_REQUEST['address'];
$branch = $_REQUEST['branch'];
$password = $_REQUEST['password'];
$sem = $_REQUEST['sem'];
$fathername = $_REQUEST['fathername'];
$mothername = $_REQUEST['mothername'];
$dob = $_REQUEST['dob'];
$aggre = $_REQUEST['aggre'];

 
// Attempt insert query execution
$sql = "INSERT INTO student(id,username, email, phoneno, address, branch, password, sem, fathername, mothername, dob, aggre) 
VALUES ('$id','$username', '$email', '$phoneno', '$address', '$branch', '$password', '$sem', '$fathername', '$mothername', '$dob', '$aggre')";

if(mysqli_query($link, $sql)){
   header("location: slogin.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>
 