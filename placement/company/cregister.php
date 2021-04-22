<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tillage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstarp-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstarp-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css\home.css">
<link rel="stylesheet" href="css\login.css">
<title>SriKrishna Polytechnic college</title>
        <link rel="icon" href="../images/log1.jpeg">
<style type="text/css">
body{ font: 14px sans-serif; text-align: center; display: block;}
.tab{width:300px; height:50px; margin: auto;margin-top:40px; border-radius: 30px;}
.tab1{width:300px; height:55px; margin: auto;margin-top:40px; border-radius: 50px;text-align: center;}
.ln{width:150px;border-radius:20px; margin-left:50px;margin-top:25px; }
.footer {position: fixed; left: 0; bottom: 0; width: 100%;color: white; text-align: center;}
</style>
<!--// css -->
<script src="js/jquery-1.11.1.min.js"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
<!--css style sheet-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!--bootstrap style sheet-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>new WOW().init();</script>
</head>  

<body>
<!--nav bar-->
<section>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3a4750;" >
    <a class="navbar-brand" href="http://www.sreis.in/skp/contact_us.htm">
      <img src="images\log1.jpeg" width="50" height="50" class="d-inline-block align-top" alt=""  style="border-radius:50px;">
      SriKrishna Polytechnic
    </a>        
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02"style="margin-left:200px;">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active"><a  class="link nav-link" href="index.html"><i class="fa fa-fw fa-home"></i>Home</a> </li>
        <li class="nav-item active"><a  class="link nav-link" href="lgallary.html"><i class="fa fa-picture-o" aria-hidden="true"></i>Gallary</a> </li>
        <li class="nav-item active"><a  class="link nav-link" href="../Drives/index.php"><i class="fa fa-picture-o" aria-hidden="true"></i>Campus drive</a> </li>
        <li class="nav-item active"><a  class="link nav-link" href="../admin/login.php"><i class="fa fa-fw fa-home"></i>Admin login</a> </li>
        <li class="nav-item active"><a  class="link nav-link" href="../student/slogin.php"><i class="fa fa-user"></i>Student login</a> </li>
        <li class="nav-item active"><a  class="link nav-link" href="../company/clogin.php"><i class="fa fa-picture-o" aria-hidden="true"></i>Company login</a> </li>        
      </ul>
    </div>
  </nav>
</section>

<br/>
<h2 style="text-align:center;" >Enter Company Details</h2><br/>
<form action="sinsert.php" method="post">
  <table style="margin:auto;">
  <div class="row form-group">
    <tr>
    <div class="col-lg-6 col-md-6 form-group">
    <td><label>Company Name</label></td><td><input type="text" name="username" class="tab1"></td>
    <td><label>Webaddress</label></td><td><input type="text" name="webaddress"   class="tab1"></td>
    </div>
    </tr>
    <tr>
    <div class="col-lg-6 col-md-6 form-group">
    <td><label>Date</label></td><td><input type="date" name="date" class="tab1">
    <td><label>Phone Number</label></td><td><input type="text" name="phoneno" class="tab1"></td>
    </div>
    </tr>  
    <tr>
    <div class="col-lg-6 col-md-6 form-group">
    <td><label>Address</label></td><td><input type="text" name="address"   class="tab1"></td>
    <td><label>Password</label></td><td><input type="password" name="password"  class="tab1"></td>
    </div>
    </tr>
    <tr style="text-align:center;">
    <div class="col-lg-6 col-md-6 form-group">
    <td></td>
    <td><input type="submit" class="ln btn btn-primary" value="Submit"></td>
    <td><a href="clogin.php"  class="ln btn btn-primary" class="text-center">Cancel</a></td>
    <td></td>
    </div>
    </tr>  
  </div>
</table>            
</form>

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