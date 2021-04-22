<?php
require 'config.php';
session_start();
if(!isset($_SESSION['id']))
{
  header('location:studentProfile.php');
}
else {
	if(isset($_SESSION['id'])){
		$id=$_SESSION['id'];
		$sql = "SELECT * FROM student WHERE id='" . $_GET['id'] . "'";
		$result = mysqli_query($link, $sql);
		$row = mysqli_fetch_array($result);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SriKrishna Polytechnic college</title>
        <link rel="icon" href="../images/log1.jpeg">        <!--google font-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
        <!--css style sheet-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css\home.css">
        <link rel="stylesheet" href="css\input.css">

        <!--font awsome-->
        <script src="https://kit.fontawesome.com/32708dac45.js" crossorigin="anonymous"></script>
    
        <!--bootstrap style sheet-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <style type="text/css">
        body{ font: 14px sans-serif; text-align: left; display: block;}
		.tab{width:1000px; height:400px; margin: auto;margin-top:40px; border-radius: 30px;}
    
		.ln{width:150px;border-radius:20px; margin-left:50px;margin-top:25px; }
    </style>
</head>  

<body>
<!--nav bar-->
<section>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3a4750;" >
    <a class="navbar-brand" href="http://www.sreis.in/skp/contact_us.htm">
      <img src="images\log1.jpeg" width="50" height="50" class="d-inline-block align-top" alt="" style="border-radius:50px;">Sri Krishana Polytechnic College
    </a>       
      
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="margin-left: 10%;">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active"><a  class="nav-link" href="chome.html"><i class="fa fa-fw fa-home"></i>Home</a> </li>
        <li class="nav-item active"><a  class="nav-link" href="cabout.html"><i class="fa fa-user"></i>About</a> </li>
        <li class="nav-item active"><a  class="nav-link" href="cgallary.html"><i class="fa fa-picture-o" aria-hidden="true"></i>Gallary</a> </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i>Student</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="studentTable.php"><i class="fa fa-user-circle" aria-hidden="true"></i>student profile</a>
            <a class="dropdown-item" href="seligibility.php"><i class="fa fa-user-circle" aria-hidden="true"></i>check eligibility</a>
            <a class="dropdown-item" href="viewdrive.php"><i class="fa fa-user-circle" aria-hidden="true"></i>student details</a>
          </div>
        </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i>Drives</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="adddrive.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Add Drive</a>
          <a class="dropdown-item" href="updatedrive.php"><i class="fa fa-user-circle" aria-hidden="true"></i>update Drive</a>
          <a class="dropdown-item" href="drivedet.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Drive details</a>
          </div>
        </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="Drives/index.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i>Placement</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Drives/about.php"><i class="fa fa-user-plus" aria-hidden="true"></i>About</a>
            <a class="dropdown-item" href="Drives/products.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Campus drive</a>
            <a class="dropdown-item" href="Drives/mail.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Mail us</a>
          </div>
        </li>
        <li> <a class="nav-link active" href="cprofile.php"><i class="fa fa-address-book" aria-hidden="true"></i>My account</a></li>
        <li> <a  class="nav-link active" href="logout.php""><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li></li>
      </ul>
    </div>
  </nav>
</section>

<div class="page-header">
        <h2 style="margin-top:50px;text-align:center;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Sri Krishna Polytechnic college.</h2>

    </div>

<form  method="post">
  <table class="tab">
    <tr>
      <td><label>Student name</label></td>
      <td><input type="text" name="name" value="<?php echo $row['username']; ?>" class="box" readonly></td>
      <td><label>Email</label></td>
      <td><input type="text" name="email" value="<?php echo $row['email']; ?>"  class="box" readonly></td>
    </tr>
    <tr>
      <td><label>Phone Number</label></td>
      <td><input type="text" name="phoneno" value="<?php echo $row['phoneno']; ?>" class="box" readonly></td>
      <td><label>Address</label></td>
      <td><input type="text" name="address" value="<?php echo $row['address']; ?>"  class="box" readonly></td>
    </tr>
    <tr>
      <td><label>branch</label></td>
      <td><input type="text" name="branch" value="<?php echo $row['branch']; ?>" class="box" readonly></td>
      <td><label>sem</label></td>
      <td><input type="text" name="sem" value="<?php echo $row['sem']; ?>" class="box" readonly></td>
    </tr>
    <tr>
      <td><label>Father name</label></td>
      <td><input type="text" name="fathername" value="<?php echo $row['fathername']; ?>" class="box" readonly></td>
      <td><label>Mother name</label></td>
      <td><input type="text" name="mothername" value="<?php echo $row['mothername']; ?>" class="box" readonly></td>
    </tr>
    <tr>
      <td><label>Date of brith</label></td>
      <td><input type="text" name="dob" value="<?php echo $row['dob']; ?>"  class="box" readonly></td>
      <td><label>Aggregate</label></td>
      <td><input type="text" name="aggre" value="<?php echo $row['aggre']; ?>"  class="box" readonly></td> 
    </tr>
  </table>
  
  <!--contact-->
    <section id="contact" style="margin-top:50px;background-color: #3a4750;" >
      <div class="row">
        <div class="feature-box col-lg-3"><a href="https//www.facebook.com"><img src="images\logo\fb.png" width="50" height="50" class="rounded-circle" alt=""></a>
        </div>
        <div class="feature-box col-lg-3"><a href="https://mail.google.com/mail/u/1/?view=cm&fs=1&to=principal.skp@gamil.com&tf=1"><img src="images\logo\gm.png" width="50" height="50" class="rounded-circle" alt=""></a>
        </div>
        <div class="feature-box col-lg-3"><a href="contact.html"><img src="images\logo\wt's.png" width="50" height="50" class="rounded-circle" alt=""></a> 
        </div>
        <div class="feature-box col-lg-3"><a href="map.html"><img src="images\logo\loc.png" width="50" height="50" class="rounded-circle" alt=""></a>
        </div>
      </div>
    </section> 


</body>
</html>