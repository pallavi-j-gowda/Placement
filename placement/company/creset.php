<?php
// Initialize the session
session_start();
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE company SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: clogin.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
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
        <link rel="stylesheet" href="css\contact.css">
        <!--font awsome-->
        <script src="https://kit.fontawesome.com/32708dac45.js" crossorigin="anonymous"></script>
        <style type="text/css">
          body{ font: 14px sans-serif; text-align: center; display: block;}
          .theme{margin: auto; width:80%; margin: auto;margin-top:40px; margin-left:20%; border-radius: 30px;}
          .tab{width:300px; height:50px; margin: auto;margin-top:40px; border-radius: 30px;}
          .ln{width:150px;border-radius:20px; margin-left:50px;margin-top:25px; }
          .footer {position: fixed; left: 0; bottom: 0; width: 100%;color: white; text-align: center;}
        </style>
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
          <a class="nav-link dropdown-toggle" href="../Drives/index.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i>Placement</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../Drives/about.php"><i class="fa fa-user-plus" aria-hidden="true"></i>About</a>
            <a class="dropdown-item" href="../Drives/products.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Campus drive</a>
            <a class="dropdown-item" href="../Drives/mail.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Mail us</a>
          </div>
        </li>
        <li> <a class="nav-link active" href="cprofile.php"><i class="fa fa-address-book" aria-hidden="true"></i>My account</a></li>
        <li> <a  class="nav-link active" href="logout.php""><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li></li>
      </ul>
    </div>
  </nav>
</section>

<br/>
<div >
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p><br/>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
        <table class="theme">
            <tr>
                <td><div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label>New Password</label></td>
                <td><input type="password" name="new_password" class="tab" value="<?php echo $new_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span></div></td>
            </tr>
            <tr>
                <td><div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label></td>
                <td><input type="password" name="confirm_password" class="tab">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div></td>
            </tr>
            <tr>
                <td><div class="form-group">
                <input type="submit" class="ln btn btn-primary" value="Submit"></td>
                <td><a class="btn btn-link" href="cprofile.php">Cancel</a>
            </div></td>
            </tr>
        </table>     
        </form>
</div>    
<br/><br/>


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