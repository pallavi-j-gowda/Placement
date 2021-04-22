<?php
  session_start();
  if(isset($_SESSION["id"])){
  }
   else
	   header("location: login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SriKrishna Polytechnic college</title>
        <link rel="icon" href="../images/log1.jpeg">        <style type="text/css">
          body{ font: 14px sans-serif; text-align: center; display: block;}
          .theme{margin: auto; width:80%; margin: auto;margin-top:40px; margin-left:20%; border-radius: 30px;}
          .tab{width:300px; height:50px; margin: auto;margin-top:40px; border-radius: 30px;}
          .ln{width:150px;border-radius:20px; margin-left:50px;margin-top:25px; }
          .footer {position: fixed; left: 0; bottom: 0; width: 100%;color: white; text-align: center;}
        </style>
        <!--google font-->
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
<section>
  <h2 class="margin-bottom-10">ELIGIBILITY CRITERIA</h2>
  <form action="eligibility.php" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
   <table  align="center" style="border-radius:30px; width:50%;" class="box">
      <tr><td><label class="control-label templatemo-block">BRANCH</label></td><td><select name="branch" class="box" >  
					    <option value="">branch</option>
              <option value="COMPUTER SCIENCE ENGINEERING">COMPUTER SCIENCE ENGINEERING</option>
              <option value="MECHANICAL ENGINEERING">MECHANICAL ENGINEERING</option>
              <option value="CIVIL ENGINEERING">CIVIL ENGINEERING</option>
              <option value="ELECTRICAL ENGINEERING">ELECTRICAL ENGINEERING</option>
              <option value="ELECTRICAL AND ELECTRONIC ENGINEERING">ELECTRICAL AND ELECTRONIC ENGINEERING</option>
          </select></td>
      </tr>
      <tr><td><label for="sem">SEMESTER</label></td><td><select name="sem" class="box" >  
					    <option value="">semester</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
          </select></td>         
      </tr>
      <tr><td><label for="aggre">Aggregate</label></td><td><input type="text" name="aggre"  id="aggre" placeholder="aggregate in perecentage" class="box" ></td></tr>
      <tr><td><button type="submit" name="submit" class="ln btn btn-primary">submit</button></td><td><button type="reset" class="ln btn btn-primary">Reset</button></td></tr></table>     
  </form>
</section>

<!-- JS -->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
<script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
<script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
</script>    

<!--contact-->
<section class="footer" style="background-color: #3a4750;" >
  <div class="row">
    <div class="feature-box col-lg-3"><a href="https//www.facebook.com"><img src="images\logo\fb.png" width="50" height="50" class="rounded-circle" alt=""></a></div>
    <div class="feature-box col-lg-3"><a href="https://mail.google.com/mail/u/1/?view=cm&fs=1&to=principal.skp@gamil.com&tf=1"><img src="images\logo\gm.png" width="50" height="50" class="rounded-circle" alt=""></a></div>
    <div class="feature-box col-lg-3"><a href="contact.html"><img src="images\logo\wt's.png" width="50" height="50" class="rounded-circle" alt=""></a></div>
    <div class="feature-box col-lg-3"><a href="map.html"><img src="images\logo\loc.png" width="50" height="50" class="rounded-circle" alt=""></a></div>
  </div>
</section> 
    
</body>
</html>