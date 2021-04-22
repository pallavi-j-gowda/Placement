<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    $link = mysqli_connect("localhost", "root", "", "demo");
    $sql=mysqli_query($link,"SELECT * FROM company WHERE username='$name' and Password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$row['username'];
        $_SESSION['password']=$row['password'];
       header("Location: chome.html"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>
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
<title>SriKrishna Polytechnic college</title>
        <link rel="icon" href="../images/log1.jpeg">
<!--// css -->
<script src="js/jquery-1.11.1.min.js"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
	 new WOW().init();
</script>

<style type="text/css">
body{ font: 14px sans-serif; text-align: center; display: block;}
.tab{width:700px; height:400px; margin: auto;margin-top:40px; border-radius: 30px;}
.tab1{width:300px; height:55px; margin: auto;margin-top:40px; border-radius: 50px;text-align: center;}
.ln{width:150px;border-radius:20px; margin-left:50px;margin-top:25px; }
.footer {position: fixed; left: 0; bottom: 0; width: 100%;color: white; text-align: center;}
</style>
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
        <li class="nav-item active"><a  class="link nav-link" href="/placement/index.html"><i class="fa fa-fw fa-home"></i>Home</a> </li>
        <li class="nav-item active"><a  class="link nav-link" href="/placement/lgallary.html"><i class="fa fa-picture-o" aria-hidden="true"></i>Gallary</a> </li>
        <li class="nav-item active"><a  class="link nav-link" href="../Drives/index.php"><i class="fa fa-picture-o" aria-hidden="true"></i>Campus drive</a> </li>
        <li class="nav-item active"><a  class="link nav-link" href="../admin/login.php"><i class="fa fa-fw fa-home"></i>Admin login</a> </li>
        <li class="nav-item active"><a  class="link nav-link" href="../hod/login.php"><i class="fa fa-fw fa-home"></i>Hod login</a> </li>
        <li class="nav-item active"><a  class="link nav-link" href="../student/slogin.php"><i class="fa fa-user"></i>Student login</a> </li>
        <li class="nav-item active"><a  class="link nav-link" href="clogin.php"><i class="fa fa-picture-o" aria-hidden="true"></i>Company login</a> </li>        
      </ul>
    </div>
  </nav>
</section>

<form method="post" class="container">
<h2>Login</h2><p>Please fill in your credentials to login.</p></td>
    <table class="tab">
            <tr>
                <td><label><b>NAME</b></label></td>
                <td><input type="text" class="tab1" name="name" placeholder="name" required="required"></td>
            </tr>
            <tr>
                <td><label><b>Password</b></label></td>
                <td><input type="password" class="tab1" name="pass" placeholder="Password" required="required"></td>
            </tr>
            <tr><td><button type="submit" name="save" class="ln btn btn-primary">Login</button></td>
            <td><a href="cregister.php" class="ln btn btn-primary">Sign up</a></td></tr>
        </table>
</form>

  <!--contact-->
  <section id="contact" style="background-color: #3a4750;" >
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