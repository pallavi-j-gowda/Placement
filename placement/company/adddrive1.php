<?php
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$id = $_POST['id'];
$cname = $_POST['cname'];
$date = $_POST['date'];
$campool = $_POST['campool'];
$poolven = $_POST['pcv'];
$back = $_POST['curback'];
$otherdet = $_POST['odetails'];

$sql = "INSERT INTO addpdrive(id,cname, date, drive, place, backlog, details)
VALUES ('$id','$cname', '$date', '$campool', '$poolven','$back', '$otherdet')";


if(mysqli_query($link, $sql)){
    header("Location: drivedet.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
